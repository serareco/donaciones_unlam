<?php 	$arrUrl = explode ("/",uri_string());	function serachArrayInArray($indexes, $arr){		if($indexes && $arr){			if(is_array($indexes)){					foreach ($indexes as $index){					if(in_array($index, $arr)) return TRUE;				}			}else {				if(in_array($indexes, $arr)) return TRUE;			}		}		return FALSE;	}?><div id="userbar"><!-- Userbar Begin -->	<div id="profile"><!-- Profile Begin -->		<div id="avatar">			<img src="<?php echo base_url()?>source/admin/images/test_avatar.png" alt="Avatar" height="44" />		</div>		<div id="profileinfo">			<h3 id="username"><?php echo $this->native_session->userdata('username');?></h3>			<span id="subline"><?php echo (getRoleId() == 1) ? "Editor" : "Periodista";?></span>			<div class="clear"></div>						<a href="<?php echo base_url()?>user/modify/<?php echo $this->native_session->userdata('userId')?>" class="profilebutton">Mi Cuenta</a>		</div>	</div><!-- Userbar End -->	<ul id="navigation"><!-- Main Navigation Begin -->						<li class="<?php echo (serachArrayInArray('welcome', $arrUrl)) ? 'activepage': '';?>" >			<a href="<?php echo base_url()?>admin/welcome" class="icon_home">Home</a>		</li>		<?php if(isAllowedSection("note")):?>		<li class="<?php echo (serachArrayInArray(array('notes'), $arrUrl)) ? 'activepage': '';?>" >			<li><a class="icon_paste" href="<?php echo base_url()?>admin/note">Notas</a></li>		</li>		<?php endif;?>			<?php if(isAllowedSection("user")):?>		<li class="<?php echo (serachArrayInArray(array('user'), $arrUrl)) ? 'activepage': '';?>" >			<a href="#" class="icon_pen">Administración</a>			<ul>								<li><a href="<?php echo base_url()?>admin/user">Usuarios</a></li>										</ul>		</li>		<?php endif;?>			<li class="<?php echo (serachArrayInArray('logout', $arrUrl)) ? 'activepage': '';?>" >			<a href="<?php echo base_url()?>admin/logout" class="icon_logout">Logout</a>		</li>	</ul><!-- Main Navigation End --></div><!-- Userbar End --><div class="clear"></div>