<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
<<<<<<< HEAD
|---------------------------------------------------------------------------
| DEFAULT ROUTE
|---------------------------------------------------------------------------
*/
$route['default_controller']   = 'web';
$route['404_override']         = 'web/error_not_found';
$route['translate_uri_dashes'] = FALSE;

/*
|---------------------------------------------------------------------------
| DASHBOARD UMUM (Role lama non-MKN: admin / user / notaris dkk.)
|---------------------------------------------------------------------------
*/
$route['dashboard'] = 'users/index';

/*
|---------------------------------------------------------------------------
| HALAMAN WEB (Publik)
|---------------------------------------------------------------------------
*/
$route['page']                 = 'web/index';
$route['page/(:any)']          = 'web/index/$1';
$route['page/pengurus/(:any)'] = 'web/pengurus/$1';
$route['index']                = 'web/index';
$route['profile']              = 'users/profile';
$route['ubah_pass']            = 'users/ubah_pass';
$route['dossier_pribadi']      = 'users/dossier_pribadi';
$route['tambahnotarisvl']      = 'tambahnotaris/v/l';
$route['unggah_file']          = 'users/unggah_file';

/*
|---------------------------------------------------------------------------
| MODUL KAS
|---------------------------------------------------------------------------
*/
$route['kas/masuk']  = 'data/kas/masuk';
$route['kas/keluar'] = 'data/kas/keluar';
$route['kas/rekap']  = 'data/kas/rekap';

/*
|---------------------------------------------------------------------------
| WEB UMUM
|---------------------------------------------------------------------------
*/
$route['download'] = 'web/download';
$route['kontak']   = 'web/kontak';

/*
|---------------------------------------------------------------------------
| ROLE BARU MKN (FINAL ONLY) — TANPA ALIAS LAMA
|---------------------------------------------------------------------------
*/
/* Sekretariat MKN */
$route['sekretariat_mkn']                  = 'Sekretariat_mkn/index';
$route['sekretariat_mkn/index']            = 'Sekretariat_mkn/index';
$route['sekretariat_mkn/detail/(:num)']    = 'Sekretariat_mkn/detail/$1';
$route['sekretariat_mkn/surat/(:num)']     = 'Sekretariat_mkn/form_surat/$1';
$route['sekretariat_mkn/surat/simpan']     = 'Sekretariat_mkn/simpan_surat';
$route['sekretariat_mkn/surat/bawa/(:num)']= 'Sekretariat_mkn/toggle_bawa/$1';
$route['sekretariat_mkn/kirim_ke_anggota/(:num)'] = 'Sekretariat_mkn/kirim_ke_anggota/$1';

/* Anggota MKN */
$route['anggota_mkn']                      = 'Anggota_mkn/index';
$route['anggota_mkn/index']                = 'Anggota_mkn/index';
$route['anggota_mkn/periksa/(:num)']       = 'Anggota_mkn/periksa/$1';
$route['anggota_mkn/simpan']               = 'Anggota_mkn/simpan_pemeriksaan';

/* APH */
$route['aph/pengajuan']                    = 'Aph/form_pengajuan';
$route['aph/pengajuan.html']               = 'Aph/form_pengajuan';
$route['aph/simpan_pengajuan']             = 'Aph/simpan_pengajuan';

/*
|---------------------------------------------------------------------------
| LOGIN & REGISTER (termasuk variasi .html)
|---------------------------------------------------------------------------
*/
$route['web/login']               = 'web/login';
$route['web/login.html']          = 'web/login';
$route['web/user_register']       = 'web/user_register';
$route['web/user_register.html']  = 'web/user_register';
$route['web/index.html']          = 'web/index';
$route['web/beranda.html']        = 'web/index';

/* Root akses langsung */
$route['login']                   = 'web/login';
$route['login.html']              = 'web/login';
$route['user_register']           = 'web/user_register';
$route['user_register.html']      = 'web/user_register';

/*
|---------------------------------------------------------------------------
| LOGOUT (termasuk variasi .html)
|---------------------------------------------------------------------------
*/
$route['web/logout']      = 'web/logout';
$route['web/logout.html'] = 'web/logout';
$route['logout']          = 'web/logout';
$route['logout.html']     = 'web/logout';
=======
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'web';
$route['404_override'] = 'web/error_not_found';
$route['dashboard']    = 'users/index';
$route['page']         = 'web/index';
$route['page/(:any)']  = 'web/index/$1';
$route['page/pengurus/(:any)']  = 'web/pengurus/$1';
$route['index']        = 'web/index';
$route['profile']      = 'users/profile';
$route['ubah_pass']    = 'users/ubah_pass';
$route['dossier_pribadi']    = 'users/dossier_pribadi';
$route['tambahnotarisvl']    = 'tambahnotaris/v/l';
$route['unggah_file']    = 'users/unggah_file';
$route['kas/masuk']    = 'data/kas/masuk';
$route['kas/keluar']   = 'data/kas/keluar';
$route['kas/rekap']    = 'data/kas/rekap';
$route['download']     = 'web/download';
$route['kontak']       = 'web/kontak';
$route['translate_uri_dashes'] = FALSE;
>>>>>>> origin/main
