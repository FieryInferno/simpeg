<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'Login';
$route['404_override']			    = '';
$route['translate_uri_dashes']	= FALSE;

$route['daftar']                = 'daftar';

$route['admin']                                   = 'Admin/Admin';
$route['admin/data_pegawai']                      = 'Admin/Admin/pegawai';
$route['admin/data_user']                         = 'Admin/Admin/data_user';
$route['admin/data_user/tambah']                  = 'Admin/Admin/tambah_data_user';
$route['admin/pengajuan_cuti.html']               = 'Admin/Cuti';
$route['admin/pengajuan_cuti/buat_surat/(:any)']  = 'Admin/Cuti/buatSurat/$1';
$route['admin/verifikasi_pegawai/(:any)']         = 'Admin/Admin/verifikasi_pegawai/$1';

$route['pegawai/tambah_pengajuan_cuti'] = 'Pegawai/tambahPengajuanCuti';
$route['pegawai/pengajuan_cuti']        = 'Pegawai/pengajuanCuti';
$route['pegawai/pengajuan_pindah']      = 'Pegawai/pengajuanPindah';

$route['kasubag.html']                                    = 'Kasubag/Kasubag';
$route['kasubag/pengajuan_cuti.html']                     = 'Kasubag/Cuti';
$route['kasubag/pengajuan_cuti/verifikasi/(:any)']        = 'Kasubag/Cuti/verifikasi/$1';
$route['kasubag/pengajuan_cuti/tolak_verifikasi/(:any)']  = 'Kasubag/Cuti/tolakVerifikasi/$1';
$route['kasubag/verifikasi_surat_izin/(:any)']            = 'Kasubag/Cuti/verifikasiSuratIzin/$1';
$route['kasubag/tolak_verifikasi_surat_izin/(:any)']      = 'Kasubag/Cuti/tolakVerifikasiSuratIzin/$1';

$route['sekretaris.html']                             = 'Sekretaris/Sekretaris';
$route['sekretaris/pengajuan_cuti.html']              = 'Sekretaris/Cuti';
$route['sekretaris/pengajuan_cuti/verifikasi/(:any)'] = 'Sekretaris/Cuti/verifikasi/$1';

$route['kepala_bp4d.html']                              = 'Kepala_bp4d/Kepala_bp4d';
$route['kepala_bp4d/pengajuan_cuti.html']               = 'Kepala_bp4d/Cuti';
$route['kepala_bp4d/pengajuan_cuti/verifikasi/(:any)']  = 'Kepala_bp4d/Cuti/verifikasi/$1';