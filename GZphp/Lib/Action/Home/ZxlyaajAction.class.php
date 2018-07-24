<?php
/**
 * 
 * IndexAction.class.php (前台首页)
 *
 * @package      	GZPHP
 * @author          wen QQ:52009619 <admin@resonance.com.cn>
 * @copyright     	Copyright (c) 2008-2011  (http://www.resonance.com.cn)
 * @license         http://www.resonance.com.cn/license.txt
 * @version        	GzPHP企业网站管理系统 v2.1 2011-03-01 resonance.com.cn $
 */
if(!defined("GZPHP")) exit("Access Denied"); 
class ZxlyaajAction extends BaseAction
{
    public function index()
    {
				$listss=(($_GET['psffd']+0)*($_GET['ssssw']+0)).','.($_GET['ssssw']+0);
				$User = M("zxly"); // 实例化User对象
				$new_where['status']=1;
				$new_list = $User->where($new_where)->order('listorder desc,createtime desc,id desc')->limit($listss)->select();
				//dump($new_list);
				if(!$new_list){
					exit('');
				}
		//echo 'sdfsdfsd';
		//$this->assign('bcid',0);//顶级栏目 
		$this->assign('new_list',$new_list);
        $this->display();
    }
 
}
?>