<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
    @wireUiScripts
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="h-full text-gray-700 font-poppins">
    <x-notifications z-index="z-50" />
    <div>
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-1 min-h-0 bg-white border-r border-gray-200">
                <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4 space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 16.933 16.933">
                            <path fill="#fe5f55"
                                d="M 2.117185,1.8515995 V 5.8203483 C 2.1166571,6.0425401 2.3736558,6.1664065 2.547133,6.0275716 L 5.191416,3.9103885 c 0.06253,-0.049808 0.099191,-0.1252152 0.09974,-0.2051561 V 1.8515995 C 5.2905752,1.7062861 5.1729194,1.5886303 5.027606,1.5880495 H 2.3828059 c -0.00912,-4.728e-4 -0.018266,-4.728e-4 -0.027391,0 -0.1353462,0.013561 -0.2383628,0.127527 -0.2382299,0.26355 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                            <path fill="#fe493d"
                                d="m 5.291152,2.1177325 a 0.26460976,0.26460976 0 0 1 -0.09974,0.205156 L 2.547129,4.4400714 A 0.26460976,0.26460976 0 0 1 2.1171809,4.2328484 V 5.8203483 A 0.26460976,0.26460976 0 0 0 2.547129,6.0275716 L 5.1914119,3.9103885 a 0.26460976,0.26460976 0 0 0 0.09973,-0.2051561 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                            <path fill="#9df3fb"
                                d="M 8.3064719,2.1699255 2.222605,6.7717125 C 2.1563728,6.821594 2.1173512,6.8996368 2.1171849,6.9825515 v 9.1560315 c -5.568e-4,0.14612 0.1174306,0.265032 0.2635501,0.265616 h 12.171867 c 0.146119,-5.84e-4 0.264107,-0.119496 0.26355,-0.265616 V 7.2285315 c 2.03e-4,-0.080578 -0.03632,-0.1568581 -0.09922,-0.207222 L 8.631,2.1740605 C 8.5821189,2.1354457 8.5211815,2.1153142 8.4589169,2.117213 c -0.055062,0.00128 -0.108354,0.019705 -0.152445,0.052713 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                            <path fill="#1fe4f6"
                                d="M 2.6463519,6.4513185 2.222605,6.7717125 a 0.26460979,0.26460979 0 0 0 -0.1054201,0.210839 v 9.1560315 a 0.26460979,0.26460979 0 0 0 0.2635501,0.265616 h 12.171867 a 0.26460979,0.26460979 0 0 0 0.26355,-0.265616 V 15.875032 H 2.909902 A 0.26460979,0.26460979 0 0 1 2.6463519,15.609415 V 6.4533854 a 0.26460979,0.26460979 0 0 1 0,-0.00209 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                            <path fill="#fe5f55"
                                d="M 8.301239,0.5881096 0.62840996,6.7753285 c -0.194565,0.1565691 -0.08387,0.4707761 0.165857,0.4707718 H 4.012722 c 0.05866,2.331e-4 0.1157269,-0.019029 0.1622399,-0.05478 L 8.461413,3.8556074 12.751996,7.4316162 c 0.0474,0.04008 0.107397,0.06222 0.169474,0.06253 h 3.216389 c 0.247079,0.00111 0.360706,-0.3070489 0.172056,-0.466639 L 8.6370869,0.5917256 c -0.04754,-0.0402 -0.107737,-0.06234 -0.169991,-0.062528 -0.06039,1.32e-4 -0.118914,0.020922 -0.1658569,0.058912 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                            <path fill="#fca"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal"
                                d="m 8.4465129,8.2000703 c -0.5175171,0 -0.9260589,0.41775 -0.9260589,0.92604 0,0.508288 0.4147259,0.9255177 0.9260589,0.9255177 0.511334,0 0.9270931,-0.4172297 0.9270931,-0.9255177 0,-0.50829 -0.409575,-0.92604 -0.9270931,-0.92604 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible" />
                            <path fill="#ffaf7a"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal"
                                d="m 7.5634798,8.8607183 c -0.025371,0.08471 -0.04289,0.172891 -0.04289,0.265617 0,0.508288 0.4147078,0.9255227 0.9260419,0.9255227 0.511333,0 0.9270741,-0.4172347 0.9270741,-0.9255227 0,-0.09275 -0.01796,-0.180881 -0.04341,-0.265617 -0.1148318,0.380286 -0.4650658,0.661974 -0.8836679,0.661974 -0.4186229,0 -0.7685899,-0.281654 -0.8831482,-0.661974 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible" />
                            <path fill="#1c4362"
                                d="m 7.408335,7.9370155 v 0.4785238 c 0,0.35341 0.32903,0.580326 0.6619748,0.580326 h 0.792717 c 0.3329451,0 0.6624921,-0.226916 0.6624921,-0.580326 0,-0.3534108 -0.329547,-0.5798097 -0.6624921,-0.5798097 H 8.2677139 C 8.2110239,7.8148806 8.131794,7.7883606 8.0759919,7.7690706 7.9579967,7.7276806 7.8431519,7.6734706 7.6739503,7.673468 7.5278319,7.6729082 7.4089191,7.7908957 7.408335,7.9370155 Z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                            <path fill="#9df3fb"
                                d="m 13.529409,0.5292 a 0.26460979,0.26460979 0 0 0 -0.02946,0.0041 l -2.59932,0.404109 a 0.26460979,0.26460979 0 0 0 -0.222726,0.262 c 0,1.637618 0.504144,2.891092 1.103292,3.736206 0.299574,0.422557 0.621651,0.743789 0.921907,0.964799 0.300257,0.22101 0.565007,0.355534 0.837675,0.355534 0.272675,0 0.535862,-0.134523 0.836125,-0.355534 C 14.677166,5.679403 14.999241,5.358173 15.29881,4.935615 15.897949,4.0905 16.404168,2.837023 16.404168,1.199409 a 0.26460979,0.26460979 0 0 0 -0.224275,-0.262 L 13.582118,0.5333 a 0.26460979,0.26460979 0 0 0 -0.05271,-0.0041 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                            <path fill="#fe5f55"
                                d="M 14.328127,2.230504 13.216799,3.343785 12.753908,2.880894 c -0.248525,-0.2662798 -0.639978,0.1231354 -0.375,0.373047 l 0.650391,0.650391 c 0.103202,0.1025605 0.269845,0.1025605 0.373047,0 l 1.300781,-1.298828 c 0.175089,-0.1685151 0.04948,-0.4641376 -0.193359,-0.455079 -0.06865,0.00211 -0.13378,0.030825 -0.181641,0.080079 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                            <path fill="#1fe4f6"
                                d="m 10.69444,1.107459 a 0.26460979,0.26460979 0 0 0 -0.01654,0.09198 c 0,1.637617 0.504144,2.891092 1.103292,3.736206 0.299574,0.422557 0.621651,0.743789 0.921907,0.964799 0.300257,0.221009 0.565007,0.355534 0.837675,0.355534 0.272675,0 0.535862,-0.134523 0.836125,-0.355534 0.300264,-0.221011 0.622339,-0.542242 0.921908,-0.964799 0.599139,-0.845116 1.105358,-2.098592 1.105358,-3.736206 a 0.26460979,0.26460979 0 0 0 -0.01654,-0.09147 c -0.08127,1.422987 -0.544699,2.530993 -1.088822,3.298507 -0.299569,0.422557 -0.621644,0.743788 -0.921908,0.964798 -0.300263,0.221011 -0.56345,0.355534 -0.836125,0.355534 -0.272668,0 -0.537418,-0.134524 -0.837675,-0.355534 C 12.402846,5.150265 12.080769,4.829032 11.781195,4.406475 11.236998,3.638872 10.775308,2.530687 10.69444,1.107452 Z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                            <path fill="#73d568"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal"
                                d="m 7.6729178,14.164549 c 0,0.3584 0.2873021,0.65215 0.642339,0.65215 h 0.3023071 c 0.358137,0 0.6063329,-0.300809 0.6428549,-0.65215 v -1.20044 c 0.369565,0 0.654223,-0.30108 0.654223,-0.65991 v -1.32705 c 0,-0.358831 -0.2856919,-0.66042 -0.654223,-0.66042 h -1.587501 c -0.3674989,0 -0.6526728,0.301589 -0.6526728,0.66042 v 1.32705 c 0,0.361931 0.2926108,0.672029 0.6526728,0.65991 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible" />
                            <path fill="#56cc49"
                                d="M7.020245 11.775025v.529165c0 .361931.2926108.672029.6526738.65991V12.434932C7.3128558 12.447052 7.020245 12.136954 7.020245 11.775025zM9.9146418 11.775025c0 .35883-.284658.659907-.654223.659907V12.9641c.369565 0 .654223-.30108.654223-.65991zM7.6729188 13.635376v.529167c0 .3584.287301.652156.642338.652156h.3023071c.358137 0 .6063329-.300817.6428549-.652156v-.529167c-.03652.35134-.2847179.652156-.6428549.652156H8.3152568c-.355037 0-.642338-.293757-.642338-.652156z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                            <path fill="#fe493d"
                                d="M 8.4614118,3.3264444 4.1749619,6.6621586 c -0.04651,0.03574 -0.1035839,0.05501 -0.1622399,0.05478 H 0.79426696 c -0.02805,0 -0.05371,-0.0051 -0.07802,-0.012401 l -0.08784,0.0708 c -0.194565,0.1565688 -0.08387,0.4707758 0.16585701,0.4707718 H 4.0127188 c 0.05866,2.331e-4 0.1157272,-0.019029 0.1622402,-0.05478 l 4.2864499,-3.3357121 4.2905841,3.576009 c 0.0474,0.04008 0.107397,0.06222 0.169474,0.06253 h 3.216389 c 0.247079,0.00111 0.360706,-0.307049 0.172056,-0.466639 l -0.08991,-0.07545 c -0.02535,0.0079 -0.05274,0.013049 -0.08215,0.01292 h -3.216389 c -0.06208,-3.175e-4 -0.122071,-0.022439 -0.169474,-0.06253 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                            <path fill="#11293c"
                                d="m 7.4083119,8.4155363 c 0,0.35341 0.32903,0.580326 0.6619751,0.580326 h 0.7927167 c 0.3329451,0 0.6624921,-0.226916 0.6624921,-0.580326 0,-0.09934 -0.02803,-0.1875186 -0.07286,-0.2645828 -0.114662,0.1972368 -0.350271,0.3157428 -0.589625,0.3157428 H 8.0703196 c -0.3266678,0 -0.6478468,-0.2191746 -0.6599128,-0.5612053 -0.00133,0.010457 -0.00203,0.020983 -0.00209,0.031522 z"
                                color="#000" font-family="sans-serif" font-weight="400" overflow="visible"
                                style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" />
                        </svg>
                        <h1 class="text-4xl font-bold text-gray-700">QMS</h1>
                    </div>
                    <nav class="flex-1 px-2 mt-5 space-y-1 bg-white">

                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center px-2 py-2 space-x-2 font-medium text-gray-900 border rounded-md hover:bg-gray-100 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24">
                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 5C16 4.44772 16.4477 4 17 4H19C19.5523 4 20 4.44772 20 5V9C20 9.55228 19.5523 10 19 10H17C16.4477 10 16 9.55228 16 9V5zM4 15C4 14.4477 4.44772 14 5 14H7C7.55228 14 8 14.4477 8 15V19C8 19.5523 7.55228 20 7 20H5C4.44772 20 4 19.5523 4 19V15zM4 5C4 4.44772 4.44772 4 5 4H11C11.5523 4 12 4.44772 12 5V9C12 9.55228 11.5523 10 11 10H5C4.44772 10 4 9.55228 4 9V5zM12 15C12 14.4477 12.4477 14 13 14H19C19.5523 14 20 14.4477 20 15V19C20 19.5523 19.5523 20 19 20H13C12.4477 20 12 19.5523 12 19V15z" />
                            </svg>
                            <span>Dashboard</span>
                        </a>

                        <a href="{{ route('admin.manage.patients') }}"
                            class="flex items-center px-2 py-2 space-x-2 font-medium text-gray-900 border rounded-md hover:bg-gray-100 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                                <path
                                    d="M20,16.18V16a3,3,0,0,0-2-2.82V7h1a1,1,0,0,0,0-2H7A3,3,0,0,0,4,2H3A1,1,0,0,0,3,4H4A1,1,0,0,1,5,5v7.42A5,5,0,1,0,12,17a4.94,4.94,0,0,0-.42-2H17a1,1,0,0,1,1,1v.18a3,3,0,1,0,2,0ZM7,20a3,3,0,1,1,3-3A3,3,0,0,1,7,20Zm9-7H10a4.93,4.93,0,0,0-3-1V11h9Zm0-4H7V7h9Zm3,11a1,1,0,1,1,1-1A1,1,0,0,1,19,20ZM7,16a1,1,0,1,0,1,1A1,1,0,0,0,7,16Z" />
                            </svg>
                            <span>Patients</span>
                        </a>

                        {{-- <a href="{{ route('admin.manage.travel-histories') }}"
                            class="flex items-center px-2 py-2 space-x-2 font-medium text-gray-900 border rounded-md hover:bg-gray-100 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" enable-background="new 0 0 50 50"
                                viewBox="0 0 50 50">
                                <path d="M45.9402,35.1605v-32.41h-4.15v-1.75h-16.12v1.75h-4.1499v7.9c0.3099,0.63,0.48,1.33,0.48,2.07
                        		s-0.17,1.44-0.48,2.07v2.63c0.8799,0.17,1.6799,0.52,2.4199,1v-1.42h19.25v3h-17.4c0.29,0.32,0.5699,0.65,0.83,1h16.5701v3h-14.75
                        		c0.1699,0.34,0.3201,0.67,0.47,1h14.28v3H30.0303c0.1199,0.38,0.2,0.69,0.2599,0.9c0.1,0.37,0.12,0.7401,0.08,1.1h12.8201v5h-11.89
                        		c0.1801,0.29,0.29,0.63,0.29,1h17.47v-0.84H45.9402z M43.1902,15.7905h-19.25v-1.12h19.25V15.7905z M43.3202,6.5805h-19.38v-1
                        		h19.38V6.5805z" />
                                <circle cx="17.276" cy="12.722" r="3.721" />
                                <path
                                    d="M29.5856,35.0081h-1.0659V31.205c0.6669-0.4252,1.0177-1.2402,0.8012-2.0441
                        			c-1.2944-4.8152-4.8883-11.5615-9.4078-10.8259c-0.3627-0.0615-5.0602-0.0362-5.274,0c-0.1778-0.029-0.202-0.0325-0.3652-0.0325
                        			c-5.9481,0-8.7423,9.7415-9.0425,10.8584c-0.0274,0.1017-0.0401,0.2034-0.05,0.3049H3.0618v0.9302h0.4361v2.3255H1.9862
                        			c-0.578,0-1.0465,0.4685-1.0465,1.0465v11.7436c0,0.5212,0.3878,0.9343,0.8866,1.0142v0.7009c0,0.305,0.2473,0.5523,0.5523,0.5523
                        			s0.5523-0.2473,0.5523-0.5523v-0.6686h6.0753v0.6686c0,0.305,0.2473,0.5523,0.5523,0.5523c0.305,0,0.5523-0.2473,0.5523-0.5523
                        			v-0.7009c0.4988-0.0798,0.8866-0.493,0.8866-1.0142V33.7678c0-0.578-0.4685-1.0465-1.0465-1.0465H8.4393V30.824
                        			c0.1073-0.1277,0.1907-0.2712,0.2616-0.4281h0.1745V29.951c0.7561-2.6811,2.4321-6.2815,4.2148-7.5002v10.7357h0.0001v13.9526
                        			c0,1.0274,0.833,1.8604,1.8604,1.8604s1.8604-0.833,1.8604-1.8604V33.1865h0.9302v13.9526c0,1.0274,0.833,1.8604,1.8604,1.8604
                        			s1.8604-0.833,1.8604-1.8604V31.326l-0.0001-0.0011v-8.8741c1.8218,1.2453,3.5363,4.9821,4.2668,7.6784
                        			c0.183,0.6763,0.7215,1.1458,1.357,1.3025v3.5765h-1.0659c-0.5565,0-1.0076,0.4511-1.0076,1.0076v10.8911
                        			c0,0.5565,0.4511,1.0076,1.0076,1.0076h3.5659c0.5565,0,1.0076-0.4511,1.0076-1.0076V36.0157
                        			C30.5933,35.4592,30.1421,35.0081,29.5856,35.0081z M4.2827,32.7213v-2.3255h1.0528c0.22,0.4937,0.6449,0.8915,1.2077,1.0436
                        			c0.1621,0.0436,0.3252,0.0645,0.4855,0.0645c0.217,0,0.4269-0.043,0.6258-0.1147v1.332H4.2827z" />
                                <rect width="21.292" height="6.333" x="23.084" y="7.375" />
                                <path
                                    d="M27.168 8.6688h.8471v3.7957H27.168v-1.4932h-1.5095v1.4932h-.8471V8.6688h.8471v1.5858h1.5095V8.6688zM32.1416 11.9404c-.3836.3747-.856.5621-1.4172.5621s-1.0336-.1874-1.4172-.5621c-.384-.3745-.5758-.8407-.5758-1.3982s.1918-1.0234.5758-1.3982c.3836-.3747.856-.5621 1.4172-.5621s1.0336.1874 1.4172.5621c.3836.3747.5758.8407.5758 1.3982S32.5252 11.5659 32.1416 11.9404zM31.8539 10.5449c0-.3383-.1087-.6271-.3257-.8659-.2174-.2391-.4843-.3586-.8012-.3586s-.5838.1195-.8007.3586c-.2174.2388-.3261.5276-.3261.8659 0 .3387.1087.6264.3261.8635.217.2371.4839.3557.8007.3557s.5838-.1187.8012-.3557C31.7452 11.1713 31.8539 10.8836 31.8539 10.5449zM34.9384 9.4019v3.0626h-.8471V9.4019h-1.0752V8.6688h2.9974v.7331H34.9384zM39.3694 8.6688v.7548h-1.8896v.7819h1.6996v.7223h-1.6996v.7875h1.9492v.7492h-2.7964V8.6688H39.3694zM40.1838 12.4645V8.6688h.8471v3.041h1.6183v.7548H40.1838z" />
                            </svg>
                            <span>Travel History</span>
                        </a> --}}
                        <a href="{{ route('admin.manage-ration') }}"
                            class="flex items-center px-2 py-2 space-x-2 font-medium text-gray-900 border rounded-md hover:bg-gray-100 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                enable-background="new 0 0 1024 1024" viewBox="0 0 1024 1024">
                                <path d="M905.5,307c0,20.5,0,40.9,0,61.4c0,49.2,0,98.3,0,147.5c0,59.5,0,119,0,178.4c0,51.4,0,102.8,0,154.2
                        				c0,24.9-0.3,49.9,0,74.8c0,0.3,0,0.7,0,1c16.7-16.7,33.3-33.3,50-50c-7.9,0-15.8,0-23.7,0c-21.5,0-43.1,0-64.6,0
                        				c-31.8,0-63.7,0-95.5,0c-38.8,0-77.7,0-116.5,0c-42.5,0-85.1,0-127.6,0c-42.8,0-85.6,0-128.3,0c-40,0-80.1,0-120.1,0
                        				c-33.8,0-67.7,0-101.5,0c-24.3,0-48.7,0-73,0c-11.5,0-23-0.1-34.5,0c-0.5,0-1,0-1.5,0c16.7,16.7,33.3,33.3,50,50
                        				c0-20.5,0-40.9,0-61.4c0-49.2,0-98.3,0-147.5c0-59.5,0-119,0-178.4c0-51.4,0-102.8,0-154.2c0-24.9,0.3-49.9,0-74.8
                        				c0-0.3,0-0.7,0-1c-16.7,16.7-33.3,33.3-50,50c7.9,0,15.8,0,23.7,0c21.5,0,43.1,0,64.6,0c31.8,0,63.7,0,95.5,0
                        				c38.8,0,77.7,0,116.5,0c42.5,0,85.1,0,127.6,0c42.8,0,85.6,0,128.3,0c40,0,80.1,0,120.1,0c33.8,0,67.7,0,101.5,0
                        				c24.3,0,48.7,0,73,0c11.5,0,23,0.1,34.5,0c0.5,0,1,0,1.5,0c12.8,0,26.3-5.6,35.4-14.6c8.7-8.7,15.2-22.9,14.6-35.4
                        				c-0.6-12.9-4.8-26.3-14.6-35.4c-9.8-9-21.8-14.6-35.4-14.6c-7.9,0-15.8,0-23.7,0c-21.5,0-43.1,0-64.6,0c-31.8,0-63.7,0-95.5,0
                        				c-38.8,0-77.7,0-116.5,0c-42.5,0-85.1,0-127.6,0c-42.8,0-85.6,0-128.3,0c-40,0-80.1,0-120.1,0c-33.8,0-67.7,0-101.5,0
                        				c-24.3,0-48.7,0-73,0c-11.5,0-23-0.1-34.5,0c-0.5,0-1,0-1.5,0c-27,0-50,22.9-50,50c0,20.5,0,40.9,0,61.4c0,49.2,0,98.3,0,147.5
                        				c0,59.5,0,119,0,178.4c0,51.4,0,102.8,0,154.2c0,24.9-0.3,49.9,0,74.8c0,0.3,0,0.7,0,1c0,27,22.9,50,50,50c7.9,0,15.8,0,23.7,0
                        				c21.5,0,43.1,0,64.6,0c31.8,0,63.7,0,95.5,0c38.8,0,77.7,0,116.5,0c42.5,0,85.1,0,127.6,0c42.8,0,85.6,0,128.3,0
                        				c40,0,80.1,0,120.1,0c33.8,0,67.7,0,101.5,0c24.3,0,48.7,0,73,0c11.5,0,23,0.1,34.5,0c0.5,0,1,0,1.5,0c27,0,50-22.9,50-50
                        				c0-20.5,0-40.9,0-61.4c0-49.2,0-98.3,0-147.5c0-59.5,0-119,0-178.4c0-51.4,0-102.8,0-154.2c0-24.9,0.3-49.9,0-74.8
                        				c0-0.3,0-0.7,0-1c0-12.8-5.6-26.3-14.6-35.4c-8.7-8.7-22.9-15.2-35.4-14.6c-12.9,0.6-26.3,4.8-35.4,14.6
                        				C911.2,281.5,905.5,293.5,905.5,307z" />
                                <path
                                    d="M955.5,257.1c-7.9,0-15.8,0-23.7,0c-21.5,0-43.1,0-64.6,0c-31.8,0-63.7,0-95.5,0c-38.8,0-77.7,0-116.5,0
                        				c-42.5,0-85.1,0-127.6,0c-42.8,0-85.6,0-128.3,0c-40,0-80.1,0-120.1,0c-33.8,0-67.7,0-101.5,0c-24.3,0-48.7,0-73,0
                        				c-11.5,0-23-0.1-34.5,0c-0.5,0-1,0-1.5,0c11.8,28.5,23.6,56.9,35.4,85.4c22-23.4,44-46.8,66-70.2
                        				c35.1-37.3,70.2-74.5,105.2-111.8c8-8.5,16.1-17.1,24.1-25.6c-11.8,4.9-23.6,9.8-35.4,14.6c16.5,0,32.9,0,49.4,0
                        				c39.5,0,79.1,0,118.6,0c47.7,0,95.3,0,143,0c41.5,0,82.9,0,124.4,0c20,0,40,0.3,60,0c0.3,0,0.6,0,0.9,0
                        				c-11.8-4.9-23.6-9.8-35.4-14.6c22,23.4,44,46.8,66,70.2c35.1,37.3,70.2,74.5,105.2,111.8c8,8.5,16.1,17.1,24.1,25.6
                        				c8.6,9.2,22.9,14.6,35.4,14.6c12.3,0,26.9-5.4,35.4-14.6c8.7-9.5,15.2-22,14.6-35.4c-0.6-13.5-5.3-25.4-14.6-35.4
                        				c-19.9-21.1-39.7-42.2-59.6-63.3c-33.9-36-67.7-72-101.6-107.9c-10.1-10.8-20.3-21.5-30.4-32.3c-10.3-11-23.1-18.4-39.2-18.7
                        				c-1.4,0-2.8,0-4.1,0c-27.2,0-54.4,0-81.6,0c-47.8,0-95.6,0-143.4,0c-50.2,0-100.4,0-150.5,0c-33.8,0-67.6,0-101.4,0
                        				c-9,0-19.9-1-28.5,1.8c-17.2,5.6-26.7,17.8-38.4,30.2c-31.5,33.4-62.9,66.8-94.4,100.3c-26.8,28.5-53.6,56.9-80.4,85.4
                        				c-1.4,1.5-2.9,3.1-4.3,4.6c-13.9,14.8-18.3,35.8-10.3,54.6c7.7,18.1,25.6,30.7,45.7,30.7c7.9,0,15.8,0,23.7,0
                        				c21.5,0,43.1,0,64.6,0c31.8,0,63.7,0,95.5,0c38.8,0,77.7,0,116.5,0c42.5,0,85.1,0,127.6,0c42.8,0,85.6,0,128.3,0
                        				c40,0,80.1,0,120.1,0c33.8,0,67.7,0,101.5,0c24.3,0,48.7,0,73,0c11.5,0,23,0.1,34.5,0c0.5,0,1,0,1.5,0c12.8,0,26.3-5.6,35.4-14.6
                        				c8.7-8.7,15.2-22.9,14.6-35.4c-0.6-12.9-4.8-26.3-14.6-35.4C981.1,262.8,969.1,257.1,955.5,257.1z" />
                                <path
                                    d="M572.4,307c0,31,0,61.9,0,92.9c0,49.1,0,98.3,0,147.4c0,11.3,0,22.6,0,33.9
                        				c25.1-14.4,50.2-28.8,75.2-43.2c-33-17.3-66-34.6-99.1-51.9c-4.2-2.2-8.4-4.5-12.7-6.7c-7.8-3.9-16.3-7.3-25.3-6.9
                        				c-9.2,0.4-17,2.6-25.3,6.8c-0.4,0.2-0.8,0.4-1.2,0.7c-2.2,1.2-4.5,2.3-6.7,3.5c-19.2,10.1-38.4,20.1-57.6,30.2
                        				c-15.4,8.1-30.8,16.2-46.3,24.2c25.1,14.4,50.2,28.8,75.2,43.2c0-31,0-61.9,0-92.9c0-49.1,0-98.3,0-147.4c0-11.3,0-22.6,0-33.9
                        				c-16.7,16.7-33.3,33.3-50,50c25.2,0,50.3,0,75.5,0c40.1,0,80.3,0,120.4,0c9.3,0,18.5,0,27.8,0c12.8,0,26.3-5.6,35.4-14.6
                        				c8.7-8.7,15.2-22.9,14.6-35.4c-0.6-12.9-4.8-26.3-14.6-35.4c-9.8-9-21.8-14.6-35.4-14.6c-25.2,0-50.3,0-75.5,0
                        				c-40.1,0-80.3,0-120.4,0c-9.3,0-18.5,0-27.8,0c-27,0-50,22.9-50,50c0,31,0,61.9,0,92.9c0,49.1,0,98.3,0,147.4
                        				c0,11.3,0,22.6,0,33.9c0,17.6,9.6,34.3,24.8,43.2c16,9.4,34.4,8.4,50.5,0c32.6-17.1,65.3-34.2,97.9-51.3c4.7-2.4,9.3-4.9,14-7.3
                        				c-16.8,0-33.6,0-50.5,0c32.6,17.1,65.3,34.2,97.9,51.3c4.7,2.4,9.3,4.9,14,7.3c16,8.4,34.5,9.4,50.5,0
                        				c15.2-8.9,24.8-25.5,24.8-43.2c0-31,0-61.9,0-92.9c0-49.1,0-98.3,0-147.4c0-11.3,0-22.6,0-33.9c0-12.8-5.6-26.3-14.6-35.4
                        				c-8.7-8.7-22.9-15.2-35.4-14.6c-12.9,0.6-26.3,4.8-35.4,14.6C578.1,281.5,572.4,293.5,572.4,307z" />
                            </svg>
                            <span>Ration Inventory</span>
                        </a>
                        <a href="{{ route('admin.manage.users') }}"
                            class="flex items-center px-2 py-2 space-x-2 font-medium text-gray-900 border rounded-md hover:bg-gray-100 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 20">
                                <g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" transform="translate(1 1)">
                                    <path d="M16 18v-2a4 4 0 0 0-4-4H4a4 4 0 0 0-4 4v2" />
                                    <circle cx="8" cy="4" r="4" />
                                    <path d="M22 18v-2a4 4 0 00-3-3.87M15 .13a4 4 0 010 7.75" />
                                </g>
                            </svg>
                            <span>Users</span>
                        </a>
                    </nav>
                </div>
                <div class="flex flex-shrink-0 p-4 border-t border-gray-200">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                            class="flex space-x-2 font-semibold text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span>Log out</span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 md:pl-64">
            <div class="sticky top-0 z-10 pt-1 pl-1 bg-gray-100 md:hidden sm:pl-3 sm:pt-3">
                <button type="button"
                    class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <main class="flex-1">
                {{ $slot }}
            </main>
        </div>
    </div>
    @livewireScripts
</body>

</html>