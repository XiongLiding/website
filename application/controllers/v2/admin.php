<?php
class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }


public function index(){

$this->load->dbutil();
$this->load->helper('file');
$this->load->helper('download');

$prefs = array(
//                'tables'      => array('table1', 'table2'),  // �������豸�ݵı���������.
                'ignore'      => array(),           // ����ʱ��Ҫ�����Եı�
                'format'      => 'gzip',             // gzip, zip, txt
                'filename'    => 'mybackup.sql',    // �ļ��� - ���ѡ����ZIPѹ��,������Ǳ����
                'add_drop'    => TRUE,              // �Ƿ�Ҫ�ڱ����ļ������ DROP TABLE ���
                'add_insert'  => TRUE,              // �Ƿ�Ҫ�ڱ����ļ������ INSERT ���
                'newline'     => "\n"               // �����ļ��еĻ��з�
              );

$this->dbutil->backup($prefs); 

$bak_file = 'backup'.date('YmdHis').'.gz' ; 
write_file('./' . $bak_file, $backup);

force_download($bak_file, $backup); 

}


public function download($file = FALSE ) {
			$this->load->helper('download');

			 if ( $file === FALSE ) {
				$data = 'Here is some text!';
				$name = 'mytext.txt';
				force_download($name, $data); 
			 }else {
				$data = file_get_contents("d:/pgsite/images/china_3.jpg"); // ���ļ�����
				$name = 'myphoto.jpg';
				force_download($name, $data); 
			 }

}


}