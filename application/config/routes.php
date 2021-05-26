<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'Login';
$route['404_override']			    = '';
$route['translate_uri_dashes']	= FALSE;

$route['daftar']                = 'daftar';

$route['admin/data_pegawai']                      = 'Admin/pegawai';
$route['admin/pengajuan_cuti.html']               = 'Admin/Cuti';
$route['admin/pengajuan_cuti/buat_surat/(:any)']  = 'Admin/Cuti/buatSurat/$1';

$route['pegawai/tambah_pengajuan_cuti.html']  = 'Pegawai/tambahPengajuanCuti';
$route['pegawai/pengajuan_cuti.html']         = 'Pegawai/pengajuanCuti';

$route['kasubag.html']                                          = 'Kasubag/Kasubag';
$route['kasubag/pengajuan_cuti.html']                           = 'Kasubag/Cuti';
$route['kasubag/pengajuan_cuti/verifikasi/(:any)']              = 'Kasubag/Cuti/verifikasi/$1';
$route['kasubag/pengajuan_cuti/verifikasi_surat_edaran/(:any)'] = 'Kasubag/Cuti/verifikasiSuratEdaran/$1';