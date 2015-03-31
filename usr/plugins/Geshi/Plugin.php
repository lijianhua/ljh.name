<?php
/**
 * 用GeSHi高亮库解析代码内容，版本 GeSHi 1.0.8.10 Released
 * 
 * @package GeSHi
 * @author 70&ShingChi
 * @version 1.0.1
 * @dependence 9.9.2-*
 * @link http://typecho.org
 */
class GeSHi_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Abstract_Contents')->contentEx = array('GeSHi_Plugin', 'parse');
        Typecho_Plugin::factory('Widget_Abstract_Contents')->excerptEx = array('GeSHi_Plugin', 'parse');
        Typecho_Plugin::factory('Widget_Abstract_Comments')->contentEx = array('GeSHi_Plugin', 'parse');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 解析
     * 
     * @access public
     * @param array $matches 解析值
     * @return string
     */
    public static function parseCallback($matches)
    {
        $language = trim($matches[2]);
        $source = '';
        
        $map = array(
            'html'              =>  'html4strict',
            'js'                =>  'javascript',
            'as'                =>  'actionscript',
            'as3'               =>  'actionscript3'
        );
        
        if (!class_exists('GeSHi', false)) {
            require_once 'GeSHi/geshi.php';
        }
        
        if (!empty($language)) {
            if (preg_match("/^(class|lang|language)=\"([_a-z0-9-]+)\"$/i", $language, $out)) {
                $language = trim($out[2]);
            }
            
            if (isset($map[$language])) {
                $language = $map[$language];
            }
        }
            
        $geshi = new GeSHi(trim($matches[3]), ucfirst($language));
        $source = $geshi->parse_code();
        
        return $source;
    }
    
    /**
     * 插件实现方法
     * 
     * @access public
     * @return void
     */
    public static function parse($text, $widget, $lastResult)
    {
        $text = empty($lastResult) ? $text : $lastResult;
        
        if ($widget instanceof Widget_Archive || $widget instanceof Widget_Abstract_Comments) {
            return preg_replace_callback("/<(code|pre)(\s*[^>]*)>(.*?)<\/\\1>/is", array('GeSHi_Plugin', 'parseCallback'), $text);
        } else {
            return $text;
        }
    }
}
