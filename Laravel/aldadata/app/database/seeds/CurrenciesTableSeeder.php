<?php

class CurrenciesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('currencies')->delete();

		Currency::create([
		  'country'=>'Albania',
		  'name'=>'Lek',
		  'code'=>'ALL',
		  'symbol'=>'Lek',
		  'hex'=>'4c, 65, 6b'
		]);
		Currency::create([
		  'country'=>'Afghanistan',
		  'name'=>'Afghani',
		  'code'=>'AFN',
		  'symbol'=>'؋',
		  'hex'=>'60b'
		]);
		Currency::create([
		  'country'=>'Argentina',
		  'name'=>'Peso',
		  'code'=>'ARS',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Aruba',
		  'name'=>'Guilder',
		  'code'=>'AWG',
		  'symbol'=>'ƒ',
		  'hex'=>'192'
		]);
		Currency::create([
		  'country'=>'Australia',
		  'name'=>'Dollar',
		  'code'=>'AUD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Azerbaijan',
		  'name'=>'Manat',
		  'code'=>'AZN',
		  'symbol'=>'ман',
		  'hex'=>'43c, 430, 43d'
		]);
		Currency::create([
		  'country'=>'Bahamas',
		  'name'=>'Dollar',
		  'code'=>'BSD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Barbados',
		  'name'=>'Dollar',
		  'code'=>'BBD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Belarus',
		  'name'=>'Ruble',
		  'code'=>'BYR',
		  'symbol'=>'p.',
		  'hex'=>'70, 2e'
		]);
		Currency::create([
		  'country'=>'Belize',
		  'name'=>'Dollar',
		  'code'=>'BZD',
		  'symbol'=>'BZ$',
		  'hex'=>'42, 5a, 24'
		]);
		Currency::create([
		  'country'=>'Bermuda',
		  'name'=>'Dollar',
		  'code'=>'BMD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Bolivia',
		  'name'=>'Boliviano',
		  'code'=>'BOB',
		  'symbol'=>'$b',
		  'hex'=>'24, 62'
		]);
		Currency::create([
		  'country'=>'Bosnia and Herzegovina',
		  'name'=>'Convertible Marka',
		  'code'=>'BAM',
		  'symbol'=>'KM',
		  'hex'=>'4b, 4d'
		]);
		Currency::create([
		  'country'=>'Botswana',
		  'name'=>'Pula',
		  'code'=>'BWP',
		  'symbol'=>'P',
		  'hex'=>'50'
		]);
		Currency::create([
		  'country'=>'Bulgaria',
		  'name'=>'Lev',
		  'code'=>'BGN',
		  'symbol'=>'лв',
		  'hex'=>'43b, 432'
		]);
		Currency::create([
		  'country'=>'Brazil',
		  'name'=>'Real',
		  'code'=>'BRL',
		  'symbol'=>'R$',
		  'hex'=>'52, 24'
		]);
		Currency::create([
		  'country'=>'Brunei',
		  'name'=>'Darussalam Dollar',
		  'code'=>'BND',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Cambodia',
		  'name'=>'Riel',
		  'code'=>'KHR',
		  'symbol'=>'៛',
		  'hex'=>'17db'
		]);
		Currency::create([
		  'country'=>'Canada',
		  'name'=>'Dollar',
		  'code'=>'CAD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Cayman',
		  'name'=>'Dollar',
		  'code'=>'KYD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Chile',
		  'name'=>'Peso',
		  'code'=>'CLP',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'China',
		  'name'=>'Yuan Renminbi',
		  'code'=>'CNY',
		  'symbol'=>'¥',
		  'hex'=>'a5'
		]);
		Currency::create([
		  'country'=>'Colombia',
		  'name'=>'Peso',
		  'code'=>'COP',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Costa Rica',
		  'name'=>'Colon',
		  'code'=>'CRC',
		  'symbol'=>'₡',
		  'hex'=>'20a1'
		]);
		Currency::create([
		  'country'=>'Croatia',
		  'name'=>'Kuna',
		  'code'=>'HRK',
		  'symbol'=>'kn',
		  'hex'=>'6b, 6e'
		]);
		Currency::create([
		  'country'=>'Cuba',
		  'name'=>'Peso',
		  'code'=>'CUP',
		  'symbol'=>'₱',
		  'hex'=>'20b1'
		]);
		Currency::create([
		  'country'=>'Czech Republic',
		  'name'=>'Koruna',
		  'code'=>'CZK',
		  'symbol'=>'Kč',
		  'hex'=>'4b, 10d'
		]);
		Currency::create([
		  'country'=>'Denmark',
		  'name'=>'Krone',
		  'code'=>'DKK',
		  'symbol'=>'kr',
		  'hex'=>'6b, 72'
		]);
		Currency::create([
		  'country'=>'Dominican Republic',
		  'name'=>'Peso',
		  'code'=>'DOP',
		  'symbol'=>'RD$',
		  'hex'=>'52, 44, 24'
		]);
		Currency::create([
		  'country'=>'East Caribbean',
		  'name'=>'Dollar',
		  'code'=>'XCD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Egypt',
		  'name'=>'Pound',
		  'code'=>'EGP',
		  'symbol'=>'£',
		  'hex'=>'a3'
		]);
		Currency::create([
		  'country'=>'El Salvador',
		  'name'=>'Colon',
		  'code'=>'SVC',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Estonia',
		  'name'=>'Kroon',
		  'code'=>'EEK',
		  'symbol'=>'kr',
		  'hex'=>'6b, 72'
		]);
		Currency::create([
		  'country'=>'Euro Member',
		  'name'=>'Euro',
		  'code'=>'EUR',
		  'symbol'=>'€',
		  'hex'=>'20ac'
		]);
		Currency::create([
		  'country'=>'Falkland Islands',
		  'name'=>'Pound',
		  'code'=>'FKP',
		  'symbol'=>'£',
		  'hex'=>'a3'
		]);
		Currency::create([
		  'country'=>'Fiji',
		  'name'=>'Dollar',
		  'code'=>'FJD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Ghana',
		  'name'=>'Cedis',
		  'code'=>'GHC',
		  'symbol'=>'¢',
		  'hex'=>'a2'
		]);
		Currency::create([
		  'country'=>'Gibraltar',
		  'name'=>'Pound',
		  'code'=>'GIP',
		  'symbol'=>'£',
		  'hex'=>'a3'
		]);
		Currency::create([
		  'country'=>'Guatemala',
		  'name'=>'Quetzal',
		  'code'=>'GTQ',
		  'symbol'=>'Q',
		  'hex'=>'51'
		]);
		Currency::create([
		  'country'=>'Guernsey',
		  'name'=>'Pound',
		  'code'=>'GGP',
		  'symbol'=>'£',
		  'hex'=>'a3'
		]);
		Currency::create([
		  'country'=>'Guyana',
		  'name'=>'Dollar',
		  'code'=>'GYD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Honduras',
		  'name'=>'Lempira',
		  'code'=>'HNL',
		  'symbol'=>'L',
		  'hex'=>'4c'
		]);
		Currency::create([
		  'country'=>'Hong Kong',
		  'name'=>'Dollar',
		  'code'=>'HKD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Hungary',
		  'name'=>'Forint',
		  'code'=>'HUF',
		  'symbol'=>'Ft',
		  'hex'=>'46, 74'
		]);
		Currency::create([
		  'country'=>'Iceland',
		  'name'=>'Krona',
		  'code'=>'ISK',
		  'symbol'=>'kr',
		  'hex'=>'6b, 72'
		]);
		Currency::create([
		  'country'=>'India',
		  'name'=>'Rupee',
		  'code'=>'INR',
		  'symbol'=>'₹',
		  'hex'=>'20B9'
		]);
		Currency::create([
		  'country'=>'Indonesia',
		  'name'=>'Rupiah',
		  'code'=>'IDR',
		  'symbol'=>'Rp',
		  'hex'=>'52, 70'
		]);
		Currency::create([
		  'country'=>'Iran',
		  'name'=>'Rial',
		  'code'=>'IRR',
		  'symbol'=>'﷼',
		  'hex'=>'fdfc'
		]);
		Currency::create([
		  'country'=>'Isle of Man',
		  'name'=>'Pound',
		  'code'=>'IMP',
		  'symbol'=>'£',
		  'hex'=>'a3'
		]);
		Currency::create([
		  'country'=>'Israel',
		  'name'=>'Shekel',
		  'code'=>'ILS',
		  'symbol'=>'₪',
		  'hex'=>'20aa'
		]);
		Currency::create([
		  'country'=>'Jamaica',
		  'name'=>'Dollar',
		  'code'=>'JMD',
		  'symbol'=>'J$',
		  'hex'=>'4a, 24'
		]);
		Currency::create([
		  'country'=>'Japan',
		  'name'=>'Yen',
		  'code'=>'JPY',
		  'symbol'=>'¥',
		  'hex'=>'a5'
		]);
		Currency::create([
		  'country'=>'Jersey',
		  'name'=>'Pound',
		  'code'=>'JEP',
		  'symbol'=>'£',
		  'hex'=>'a3'
		]);
		Currency::create([
		  'country'=>'Kazakhstan',
		  'name'=>'Tenge',
		  'code'=>'KZT',
		  'symbol'=>'лв',
		  'hex'=>'43b, 432'
		]);
		Currency::create([
		  'country'=>'Korea (North)',
		  'name'=>'Won',
		  'code'=>'KPW',
		  'symbol'=>'₩',
		  'hex'=>'20a9'
		]);
		Currency::create([
		  'country'=>'Korea (South)',
		  'name'=>'Won',
		  'code'=>'KRW',
		  'symbol'=>'₩',
		  'hex'=>'20a9'
		]);
		Currency::create([
		  'country'=>'Kyrgyzstan',
		  'name'=>'Som',
		  'code'=>'KGS',
		  'symbol'=>'лв',
		  'hex'=>'43b, 432'
		]);
		Currency::create([
		  'country'=>'Laos',
		  'name'=>'Kip',
		  'code'=>'LAK',
		  'symbol'=>'₭',
		  'hex'=>'20ad'
		]);
		Currency::create([
		  'country'=>'Latvia',
		  'name'=>'Lat',
		  'code'=>'LVL',
		  'symbol'=>'Ls',
		  'hex'=>'4c, 73'
		]);
		Currency::create([
		  'country'=>'Lebanon',
		  'name'=>'Pound',
		  'code'=>'LBP',
		  'symbol'=>'£',
		  'hex'=>'a3'
		]);
		Currency::create([
		  'country'=>'Liberia',
		  'name'=>'Dollar',
		  'code'=>'LRD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Lithuania',
		  'name'=>'Litas',
		  'code'=>'LTL',
		  'symbol'=>'Lt',
		  'hex'=>'4c, 74'
		]);
		Currency::create([
		  'country'=>'Macedonia',
		  'name'=>'Denar',
		  'code'=>'MKD',
		  'symbol'=>'ден',
		  'hex'=>'434, 435, 43d'
		]);
		Currency::create([
		  'country'=>'Malaysia',
		  'name'=>'Ringgit',
		  'code'=>'MYR',
		  'symbol'=>'RM',
		  'hex'=>'52, 4d'
		]);
		Currency::create([
		  'country'=>'Mauritius',
		  'name'=>'Rupee',
		  'code'=>'MUR',
		  'symbol'=>'₨',
		  'hex'=>'20a8'
		]);
		Currency::create([
		  'country'=>'Mexico',
		  'name'=>'Peso',
		  'code'=>'MXN',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Mongolia',
		  'name'=>'Tughrik',
		  'code'=>'MNT',
		  'symbol'=>'₮',
		  'hex'=>'20ae'
		]);
		Currency::create([
		  'country'=>'Mozambique',
		  'name'=>'Metical',
		  'code'=>'MZN',
		  'symbol'=>'MT',
		  'hex'=>'4d, 54'
		]);
		Currency::create([
		  'country'=>'Namibia',
		  'name'=>'Dollar',
		  'code'=>'NAD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Nepal',
		  'name'=>'Rupee',
		  'code'=>'NPR',
		  'symbol'=>'₨',
		  'hex'=>'20a8'
		]);
		Currency::create([
		  'country'=>'Netherlands',
		  'name'=>'Antilles Guilder',
		  'code'=>'ANG',
		  'symbol'=>'ƒ',
		  'hex'=>'192'
		]);
		Currency::create([
		  'country'=>'New Zealand',
		  'name'=>'Dollar',
		  'code'=>'NZD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Nicaragua',
		  'name'=>'Cordoba',
		  'code'=>'NIO',
		  'symbol'=>'C$',
		  'hex'=>'43, 24'
		]);
		Currency::create([
		  'country'=>'Nigeria',
		  'name'=>'Naira',
		  'code'=>'NGN',
		  'symbol'=>'₦',
		  'hex'=>'20a6'
		]);
		Currency::create([
		  'country'=>'Norway',
		  'name'=>'Krone',
		  'code'=>'NOK',
		  'symbol'=>'kr',
		  'hex'=>'6b, 72'
		]);
		Currency::create([
		  'country'=>'Oman',
		  'name'=>'Rial',
		  'code'=>'OMR',
		  'symbol'=>'﷼',
		  'hex'=>'fdfc'
		]);
		Currency::create([
		  'country'=>'Pakistan',
		  'name'=>'Rupee',
		  'code'=>'PKR',
		  'symbol'=>'₨',
		  'hex'=>'20a8'
		]);
		Currency::create([
		  'country'=>'Panama',
		  'name'=>'Balboa',
		  'code'=>'PAB',
		  'symbol'=>'B/.',
		  'hex'=>'42, 2f, 2e'
		]);
		Currency::create([
		  'country'=>'Paraguay',
		  'name'=>'Guarani',
		  'code'=>'PYG',
		  'symbol'=>'Gs',
		  'hex'=>'47, 73'
		]);
		Currency::create([
		  'country'=>'Peru',
		  'name'=>'Nuevo Sol',
		  'code'=>'PEN',
		  'symbol'=>'S/.',
		  'hex'=>'53, 2f, 2e'
		]);
		Currency::create([
		  'country'=>'Philippines',
		  'name'=>'Peso',
		  'code'=>'PHP',
		  'symbol'=>'₱',
		  'hex'=>'20b1'
		]);
		Currency::create([
		  'country'=>'Poland',
		  'name'=>'Zloty',
		  'code'=>'PLN',
		  'symbol'=>'zł',
		  'hex'=>'7a, 142'
		]);
		Currency::create([
		  'country'=>'Qatar',
		  'name'=>'Riyal',
		  'code'=>'QAR',
		  'symbol'=>'﷼',
		  'hex'=>'fdfc'
		]);
		Currency::create([
		  'country'=>'Romania',
		  'name'=>'New Leu',
		  'code'=>'RON',
		  'symbol'=>'lei',
		  'hex'=>'6c, 65, 69'
		]);
		Currency::create([
		  'country'=>'Russia',
		  'name'=>'Ruble',
		  'code'=>'RUB',
		  'symbol'=>'руб',
		  'hex'=>'440, 443, 431'
		]);
		Currency::create([
		  'country'=>'Saint Helena',
		  'name'=>'Pound',
		  'code'=>'SHP',
		  'symbol'=>'£',
		  'hex'=>'a3'
		]);
		Currency::create([
		  'country'=>'Saudi Arabia',
		  'name'=>'Riyal',
		  'code'=>'SAR',
		  'symbol'=>'﷼',
		  'hex'=>'fdfc'
		]);
		Currency::create([
		  'country'=>'Serbia',
		  'name'=>'Dinar',
		  'code'=>'RSD',
		  'symbol'=>'Дин.',
		  'hex'=>'414, 438, 43d, 2e'
		]);
		Currency::create([
		  'country'=>'Seychelles',
		  'name'=>'Rupee',
		  'code'=>'SCR',
		  'symbol'=>'₨',
		  'hex'=>'20a8'
		]);
		Currency::create([
		  'country'=>'Singapore',
		  'name'=>'Dollar',
		  'code'=>'SGD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Solomon Islands',
		  'name'=>'Dollar',
		  'code'=>'SBD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Somalia',
		  'name'=>'Shilling',
		  'code'=>'SOS',
		  'symbol'=>'S',
		  'hex'=>'53'
		]);
		Currency::create([
		  'country'=>'South Africa',
		  'name'=>'Rand',
		  'code'=>'ZAR',
		  'symbol'=>'S',
		  'hex'=>'52'
		]);
		Currency::create([
		  'country'=>'Sri Lanka',
		  'name'=>'Rupee',
		  'code'=>'LKR',
		  'symbol'=>'₨',
		  'hex'=>'20a8'
		]);
		Currency::create([
		  'country'=>'Sweden',
		  'name'=>'Krona',
		  'code'=>'SEK',
		  'symbol'=>'kr',
		  'hex'=>'6b, 72'
		]);
		Currency::create([
		  'country'=>'Switzerland',
		  'name'=>'Franc',
		  'code'=>'CHF',
		  'symbol'=>'CHF',
		  'hex'=>'43, 48, 46'
		]);
		Currency::create([
		  'country'=>'Suriname',
		  'name'=>'Dollar',
		  'code'=>'SRD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Syria',
		  'name'=>'Pound',
		  'code'=>'SYP',
		  'symbol'=>'£',
		  'hex'=>'a3'
		]);
		Currency::create([
		  'country'=>'Taiwan',
		  'name'=>'New Dollar',
		  'code'=>'TWD',
		  'symbol'=>'NT$',
		  'hex'=>'4e, 54, 24'
		]);
		Currency::create([
		  'country'=>'Thailand',
		  'name'=>'Baht',
		  'code'=>'THB',
		  'symbol'=>'฿',
		  'hex'=>'e3f'
		]);
		Currency::create([
		  'country'=>'Trinidad and Tobago',
		  'name'=>'Dollar',
		  'code'=>'TTD',
		  'symbol'=>'TT$',
		  'hex'=>'54, 54, 24'
		]);
		Currency::create([
		  'country'=>'Turkey',
		  'name'=>'Lira',
		  'code'=>'TRL',
		  'symbol'=>'₤',
		  'hex'=>'20a4'
		]);
		Currency::create([
		  'country'=>'Tuvalu',
		  'name'=>'Dollar',
		  'code'=>'TVD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Ukraine',
		  'name'=>'Hryvna',
		  'code'=>'UAH',
		  'symbol'=>'₴',
		  'hex'=>'20b4'
		]);
		Currency::create([
		  'country'=>'United Kingdom',
		  'name'=>'Pound',
		  'code'=>'GBP',
		  'symbol'=>'£',
		  'hex'=>'a3'
		]);
		Currency::create([
		  'country'=>'United States',
		  'name'=>'Dollar',
		  'code'=>'USD',
		  'symbol'=>'$',
		  'hex'=>'24'
		]);
		Currency::create([
		  'country'=>'Uruguay',
		  'name'=>'Peso',
		  'code'=>'UYU',
		  'symbol'=>'$U',
		  'hex'=>'24, 55'
		]);
		Currency::create([
		  'country'=>'Uzbekistan',
		  'name'=>'Som',
		  'code'=>'UZS',
		  'symbol'=>'лв',
		  'hex'=>'43b, 432'
		]);
		Currency::create([
		  'country'=>'Venezuela',
		  'name'=>'Bolivar Fuerte',
		  'code'=>'VEF',
		  'symbol'=>'Bs',
		  'hex'=>'42, 73'
		]);
		Currency::create([
		  'country'=>'Viet Nam',
		  'name'=>'Dong',
		  'code'=>'VND',
		  'symbol'=>'₫',
		  'hex'=>'20ab'
		]);
		Currency::create([
		  'country'=>'Yemen',
		  'name'=>'Rial',
		  'code'=>'YER',
		  'symbol'=>'﷼',
		  'hex'=>'fdfc'
		]);
		Currency::create([
		  'country'=>'Zimbabwe',
		  'name'=>'Dollar',
		  'code'=>'ZWD',
		  'symbol'=>'Z$',
		  'hex'=>'5a, 24'
		]);

	}
}
