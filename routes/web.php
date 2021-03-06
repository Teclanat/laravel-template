<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api', function () {
    $data = array (
        'success' => true,
        'data' => 
        array (
          201812 => 
          array (
          ),
          201901 => 
          array (
          ),
          201902 => 
          array (
          ),
          201903 => 
          array (
          ),
          201904 => 
          array (
          ),
          201905 => 
          array (
          ),
          201906 => 
          array (
          ),
          201907 => 
          array (
          ),
          201908 => 
          array (
          ),
          201909 => 
          array (
            0 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-01',
              'hora' => '01:36:00',
              'litragem' => 2413,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            1 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-02',
              'hora' => '01:50:00',
              'litragem' => 2594,
              'litragem_acida' => 0,
              'temperatura' => '4.2',
              'ativo' => true,
            ),
            2 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-03',
              'hora' => '02:00:00',
              'litragem' => 2646,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            3 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-04',
              'hora' => '02:10:00',
              'litragem' => 2521,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            4 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-05',
              'hora' => '01:52:00',
              'litragem' => 2438,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            5 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-06',
              'hora' => '02:10:00',
              'litragem' => 2490,
              'litragem_acida' => 0,
              'temperatura' => '3.5',
              'ativo' => true,
            ),
            6 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-07',
              'hora' => '01:55:00',
              'litragem' => 2601,
              'litragem_acida' => 0,
              'temperatura' => '3.6',
              'ativo' => true,
            ),
            7 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-08',
              'hora' => '02:10:00',
              'litragem' => 2604,
              'litragem_acida' => 0,
              'temperatura' => '4.3',
              'ativo' => true,
            ),
            8 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-09',
              'hora' => '01:41:00',
              'litragem' => 2649,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            9 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-10',
              'hora' => '02:20:00',
              'litragem' => 2601,
              'litragem_acida' => 0,
              'temperatura' => '3.2',
              'ativo' => true,
            ),
            10 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-11',
              'hora' => '01:50:00',
              'litragem' => 2643,
              'litragem_acida' => 0,
              'temperatura' => '3.5',
              'ativo' => true,
            ),
            11 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-12',
              'hora' => '02:50:00',
              'litragem' => 2719,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            12 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-13',
              'hora' => '01:58:00',
              'litragem' => 2656,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            13 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-14',
              'hora' => '02:10:00',
              'litragem' => 2570,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            14 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-15',
              'hora' => '02:10:00',
              'litragem' => 2611,
              'litragem_acida' => 0,
              'temperatura' => '4',
              'ativo' => true,
            ),
            15 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-16',
              'hora' => '01:55:00',
              'litragem' => 2601,
              'litragem_acida' => 0,
              'temperatura' => '3.5',
              'ativo' => true,
            ),
            16 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-17',
              'hora' => '02:11:00',
              'litragem' => 2438,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            17 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-18',
              'hora' => '02:10:00',
              'litragem' => 2400,
              'litragem_acida' => 0,
              'temperatura' => '2.8',
              'ativo' => true,
            ),
            18 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-19',
              'hora' => '02:20:00',
              'litragem' => 2285,
              'litragem_acida' => 0,
              'temperatura' => '4',
              'ativo' => true,
            ),
            19 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-20',
              'hora' => '02:00:00',
              'litragem' => 2243,
              'litragem_acida' => 0,
              'temperatura' => '3.3',
              'ativo' => true,
            ),
            20 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-21',
              'hora' => '02:10:00',
              'litragem' => 2340,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            21 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-22',
              'hora' => '02:05:00',
              'litragem' => 2351,
              'litragem_acida' => 0,
              'temperatura' => '3.5',
              'ativo' => true,
            ),
            22 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-23',
              'hora' => '02:15:00',
              'litragem' => 2333,
              'litragem_acida' => 0,
              'temperatura' => '3.5',
              'ativo' => true,
            ),
            23 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-24',
              'hora' => '02:05:00',
              'litragem' => 2380,
              'litragem_acida' => 0,
              'temperatura' => '3.2',
              'ativo' => true,
            ),
            24 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-25',
              'hora' => '01:51:00',
              'litragem' => 2410,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            25 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-26',
              'hora' => '01:55:00',
              'litragem' => 2380,
              'litragem_acida' => 0,
              'temperatura' => '3.8',
              'ativo' => true,
            ),
            26 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-27',
              'hora' => '02:05:00',
              'litragem' => 2417,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            27 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-28',
              'hora' => '01:55:00',
              'litragem' => 2400,
              'litragem_acida' => 0,
              'temperatura' => '3.6',
              'ativo' => true,
            ),
            28 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-29',
              'hora' => '01:54:00',
              'litragem' => 2396,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            29 => 
            array (
              'mes_desc' => 'Sep/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-09-30',
              'hora' => '01:55:00',
              'litragem' => 2405,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
          ),
          201910 => 
          array (
            0 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-01',
              'hora' => '02:10:00',
              'litragem' => 2230,
              'litragem_acida' => 0,
              'temperatura' => '4.5',
              'ativo' => true,
            ),
            1 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-02',
              'hora' => '20:40:00',
              'litragem' => 2288,
              'litragem_acida' => 0,
              'temperatura' => '4.1',
              'ativo' => true,
            ),
            2 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-03',
              'hora' => '02:22:00',
              'litragem' => 2340,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            3 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-04',
              'hora' => '02:40:00',
              'litragem' => 2152,
              'litragem_acida' => 0,
              'temperatura' => '3.2',
              'ativo' => true,
            ),
            4 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-05',
              'hora' => '02:05:00',
              'litragem' => 2156,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            5 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-06',
              'hora' => '02:45:00',
              'litragem' => 2135,
              'litragem_acida' => 0,
              'temperatura' => '3.6',
              'ativo' => true,
            ),
            6 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-07',
              'hora' => '02:18:00',
              'litragem' => 2177,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            7 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-08',
              'hora' => '02:10:00',
              'litragem' => 2191,
              'litragem_acida' => 0,
              'temperatura' => '3.2',
              'ativo' => true,
            ),
            8 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-09',
              'hora' => '02:15:00',
              'litragem' => 2320,
              'litragem_acida' => 0,
              'temperatura' => '3.5',
              'ativo' => true,
            ),
            9 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-10',
              'hora' => '02:00:00',
              'litragem' => 2372,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            10 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-11',
              'hora' => '02:14:00',
              'litragem' => 2400,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            11 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-12',
              'hora' => '01:44:00',
              'litragem' => 2395,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            12 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-13',
              'hora' => '02:20:00',
              'litragem' => 2361,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            13 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-14',
              'hora' => '02:10:00',
              'litragem' => 2260,
              'litragem_acida' => 0,
              'temperatura' => '3.5',
              'ativo' => true,
            ),
            14 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-15',
              'hora' => '02:21:00',
              'litragem' => 2274,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            15 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-16',
              'hora' => '02:00:00',
              'litragem' => 2243,
              'litragem_acida' => 0,
              'temperatura' => '2.9',
              'ativo' => true,
            ),
            16 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-17',
              'hora' => '02:10:00',
              'litragem' => 2292,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            17 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-18',
              'hora' => '01:40:00',
              'litragem' => 2330,
              'litragem_acida' => 0,
              'temperatura' => '4',
              'ativo' => true,
            ),
            18 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-19',
              'hora' => '02:24:00',
              'litragem' => 2292,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            19 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-20',
              'hora' => '01:40:00',
              'litragem' => 2365,
              'litragem_acida' => 0,
              'temperatura' => '3.2',
              'ativo' => true,
            ),
            20 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-21',
              'hora' => '02:20:00',
              'litragem' => 2300,
              'litragem_acida' => 0,
              'temperatura' => '4',
              'ativo' => true,
            ),
            21 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-22',
              'hora' => '02:00:00',
              'litragem' => 2344,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            22 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-23',
              'hora' => '02:18:00',
              'litragem' => 2438,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            23 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-24',
              'hora' => '01:40:00',
              'litragem' => 2448,
              'litragem_acida' => 0,
              'temperatura' => '3.5',
              'ativo' => true,
            ),
            24 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-25',
              'hora' => '02:20:00',
              'litragem' => 2434,
              'litragem_acida' => 0,
              'temperatura' => '3.8',
              'ativo' => true,
            ),
            25 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-26',
              'hora' => '01:50:00',
              'litragem' => 2504,
              'litragem_acida' => 0,
              'temperatura' => '3.5',
              'ativo' => true,
            ),
            26 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-27',
              'hora' => '02:10:00',
              'litragem' => 2347,
              'litragem_acida' => 0,
              'temperatura' => '3.1',
              'ativo' => true,
            ),
            27 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-28',
              'hora' => '01:55:00',
              'litragem' => 2274,
              'litragem_acida' => 0,
              'temperatura' => '3.5',
              'ativo' => true,
            ),
            28 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-29',
              'hora' => '02:00:00',
              'litragem' => 2386,
              'litragem_acida' => 0,
              'temperatura' => '3.2',
              'ativo' => true,
            ),
            29 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-30',
              'hora' => '01:50:00',
              'litragem' => 2420,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            30 => 
            array (
              'mes_desc' => 'Dec/2018',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-10-31',
              'hora' => '02:18:00',
              'litragem' => 2316,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
          ),
          201911 => 
          array (
            0 => 
            array (
              'mes_desc' => 'Jan/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-11-01',
              'hora' => '01:55:00',
              'litragem' => 2278,
              'litragem_acida' => 0,
              'temperatura' => '3.2',
              'ativo' => true,
            ),
            1 => 
            array (
              'mes_desc' => 'Jan/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-11-02',
              'hora' => '02:15:00',
              'litragem' => 2344,
              'litragem_acida' => 0,
              'temperatura' => '4',
              'ativo' => true,
            ),
            2 => 
            array (
              'mes_desc' => 'Jan/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-11-03',
              'hora' => '02:15:00',
              'litragem' => 2361,
              'litragem_acida' => 0,
              'temperatura' => '2.9',
              'ativo' => true,
            ),
            3 => 
            array (
              'mes_desc' => 'Jan/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-11-04',
              'hora' => '01:57:00',
              'litragem' => 2156,
              'litragem_acida' => 0,
              'temperatura' => '3',
              'ativo' => true,
            ),
            4 => 
            array (
              'mes_desc' => 'Jan/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '2',
              'data' => '2019-11-05',
              'hora' => '02:25:00',
              'litragem' => 2239,
              'litragem_acida' => 0,
              'temperatura' => '2.9',
              'ativo' => true,
            ),
            5 => 
            array (
              'mes_desc' => 'Jan/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '0',
              'data' => '2019-11-06',
              'hora' => NULL,
              'litragem' => 2187,
              'litragem_acida' => 0,
              'temperatura' => '0',
              'ativo' => true,
            ),
            6 => 
            array (
              'mes_desc' => 'Jan/2019',
              'produtor_codigo' => 'C39603',
              'filial' => '01',
              'status' => '0',
              'data' => '2019-11-07',
              'hora' => NULL,
              'litragem' => 2230,
              'litragem_acida' => 0,
              'temperatura' => '0',
              'ativo' => true,
            ),
          ),
        ),
        'message' => 'Dados recebidos com sucesso',
    );

    return response()->json($data);
});
