<?php

class qa_html_theme extends qa_html_theme_base{

		function body_content()
		{
			$this->body_prefix();
			$this->notices();

			$this->header();

			$this->output('<DIV CLASS="qa-body-wrapper">', '');

			$this->widgets('full', 'top');
			$this->widgets('full', 'high');
			$this->sidepanel();
			$this->main();
			$this->widgets('full', 'low');
			$this->footer();
			$this->widgets('full', 'bottom');

			$this->output('</DIV> <!-- END body-wrapper -->');

			$this->body_suffix();
		}

		function header()
		{
			?><div class='qa-user-nav'><div style='width:980px; margin:auto;'><div class='back_to_site_link'><a href='/'>Back to StageX</a> <span>|</span> <b>StageX Q&amp;A</b></div><?php $this->nav('user'); ?></div></div>
			<?php




			$this->output('<DIV CLASS="qa-header">');

			//$this->logo();
			$this->nav_main_sub();
			$this->header_clear();

			$this->output('</DIV> <!-- END qa-header -->', '');
		}

		function nav_user_search()
		{

			$this->search();
		}

		function nav_main_sub()
		{
			?><div style='height:38px;'>
				<?php $this->nav('main');
				$this->nav_user_search(); ?>
			</div><?php
			$this->nav('sub');
		}

		function footer()
		{
			$this->output('<DIV CLASS="qa-footer">');

			//$this->nav('footer');
			//$this->attribution();
			$this->footer_clear();

			$this->output('</DIV> <!-- END qa-footer -->', '');
		}

}