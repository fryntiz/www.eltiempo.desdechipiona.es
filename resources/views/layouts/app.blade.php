<!DOCTYPE html>
<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2019 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
        @include('layouts.head_meta')
        @yield('head_css')
        @yield('head_javascript')
    </head>

    <body id="page-top" class="header-sticky">
         @include('layouts.navbar')

         <div id="wrapper">
             <div id="content-wrapper">
                 <div class="container-fluid">
                     <div id="box-content">
                         @yield('content')
                     </div>
                 </div>

                 @include('layouts.sidebar')
             </div>
         </div>

         @include('layouts.footer')
         @include('layouts.footer_meta')
         @yield('css')
         @yield('javascript')
    </body>
</html>
