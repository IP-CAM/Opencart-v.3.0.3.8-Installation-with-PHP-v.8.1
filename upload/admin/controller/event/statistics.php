<?php
class ControllerEventStatistics extends Controller {
	// admin/model/catalog/review/addReview/after
	public function addReview(string &$route, array &$args, mixed &$output): void {
		$this->load->model('report/statistics');

		$this->model_report_statistics->addValue('review', 1);
	}							   

	// admin/model/catalog/review/deleteReview/after
	public function deleteReview(string &$route, array &$args, mixed &$output): void {
		$this->load->model('report/statistics');

		$this->model_report_statistics->removeValue('review', 1);
	}

	// admin/model/sale/return/addReturn/after
	public function addReturn(string &$route, array &$args, mixed &$output): void {
		$this->load->model('report/statistics');

		$this->model_report_statistics->addValue('return', 1);
	}

	// admin/model/sale/return/deleteReturn/after
	public function deleteReturn(string &$route, array &$args, mixed &$output): void {
		$this->load->model('report/statistics');

		$this->model_report_statistics->removeValue('return', 1);
	}
}