<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_dashboard extends MY_Controller
{
	/**
	 * This is view dashboard page fun_dashboard function
	 * no perameter are required
	 * 
	 *
	 * @param   no perameter
	 * @package   application/Controller/fun_dashboard **/
	public function fun_dashboard()
	{
		$data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city,sql_tb_name', array('status' => 1), 'city asc');
		$data['all_count'] = 0;
		foreach ($data['city'] as $value) {
			$data['all_count'] = $data['all_count'] + $this->Md_database->countAllResult($value['sql_tb_name'], array('status' => 1), $like = '');
		}
		foreach ($data['city'] as $row => $value) {
			$data['city'][$row]['count'] = $this->Md_database->countAllResult($value['sql_tb_name'], array('status' => 1), $like = '');
		}
		// $data['all_count'] = $this->Md_database->countAllResult(SCROLLUP_REGISTERED_USERS,array('status'=>1),$like = '');

		$this->adminBackend('admin/dashboard', $data, TRUE);
	}


	/**
	 * ***************Function to changes sorting **********
	 * @type : Function
	 * @function name : change_sorting
	 * @description : Sort City Data
	 * @param : null
	 * @designer : Yogita
	 * @author : Yugal Mali
	 * @return : null
	 ********************************************************* */
	public function change_sorting()
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		} else {
			$sort_by = $this->security->xss_clean($this->input->post('sort'));
			$asc_desc = $this->security->xss_clean($this->input->post('asc_type'));

			$data['city'] = $this->Md_database->getData(SCROLLUP_MASTER_CITY, 'city_id,city,sql_tb_name', array('status' => 1), 'city ASC');


			if ($sort_by == 'number') {
				foreach ($data['city'] as $row => $value) {
					$data['city'][$row]['count'] = $this->Md_database->countAllResult($value['sql_tb_name'], array('status' => 1), $like = '', '');
				}
				uasort($data['city'], function ($a, $b) {
					return strcmp($a['count'], $b['count']);
				});
			} else {
				foreach ($data['city'] as $row => $value) {
					$data['city'][$row]['count'] = $this->Md_database->countAllResult($value['sql_tb_name'], array('status' => 1), $like = '', '');
				}
			}

			if (!empty($asc_desc) && $asc_desc == 'desc') {
				$data['city'] = array_reverse($data['city']);
			}

			if (!empty($data['city'])) {
				foreach ($data['city'] as $key => $value) : ?>
					<div class="col-md-3">
						<a href="<?= site_url('shubham/district-list') ?>/<?php echo $value['city_id']; ?>" class="d-flex align-items-center">
							<div class="cardbox">
								<div class="cardboxbody">
									<div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
										<div class="avatar-content">
											<i class="fa fa-user"></i>
										</div>
									</div>
									<div class="total-amount">
										<h5 class="mb-0"><?php echo $value['count']; ?></h5>
										<span class="text-muted"><?php echo $value['city']; ?></span>
									</div>
									<a href="<?= site_url('shubham/district-list') ?>/<?php echo $value['city_id']; ?>" class="view-icon"><i class="fa fa-eye" aria-hidden="true"></i> </a>
									<input type="hidden" id="city_id" value="">
									<!-- <a href="<?= site_url('shubham/district-list') ?>/<?php echo $value['city_id']; ?>" class="view-icon"><i class="fa fa-eye" aria-hidden="true"></i> </a>
							<input type="hidden" id="city_id" value="<?php echo $value['city_id']; ?>"> -->
								</div>
							</div>
						</a>
					</div>
				<?php endforeach ?>
<?php }
		}
	}
}
