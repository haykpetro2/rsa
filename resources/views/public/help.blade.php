@extends('layouts.public')

@section('title', trans('general.Help page'))
@section('page_header', trans('general.Help page'))

@section('content')
    <div class="fix-height">
        <div class="box box-warning" id="calc-osago">
            <div class="box-header with-border">
                <h3 class="box-title">{{trans('general.Calc OSAGO')}}</h3>
                <div class="box-tools pull-right">
                    <a class="btn btn-box-tool" href="http://kaskometr.ru/kalkulyator_osago.html"
                       target="_blank">{{trans('general.Alt Calc')}} <i class="fa fa-external-link"></i></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <iframe src="http://www.autoins.ru/ru/osago/calculator/" frameborder="0" width="100%" height="1850"
                        scrolling="no"></iframe>
            </div>
            <!-- /.box-body -->
        </div>
        <div class="box box-warning" id="calc-kbm">
            <div class="box-header with-border">
                <h3 class="box-title">{{trans('general.Calc KBM')}}</h3>
                <div class="box-tools pull-right">
                    <a class="btn btn-box-tool" href="http://kaskometr.ru/kbm.html"
                       target="_blank">{{trans('general.Alt Calc')}} <i class="fa fa-external-link"></i></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <iframe src="http://dkbm-web.autoins.ru/dkbm-web-1.0/kbm.htm" frameborder="0" width="100%"
                        height="1000"></iframe>
            </div>
            <!-- /.box-body -->
        </div>
        <div class="box box-warning" id="to">
            <div class="box-header with-border bg-gray-light">
                <h3 class="box-title">{{trans('general.TO')}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body bg-gray-light">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-gear"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">&nbsp;</span>
                                <span class="info-box-number"><a href="http://drive-dk.com" target="_blank">DRIVE-DK.COM</a></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-gear"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">&nbsp;</span>
                                <span class="info-box-number"><a href="http://polis.to" target="_blank">POLIS.TO</a></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-gear"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">&nbsp;</span>
                                <span class="info-box-number"><a href="http://p-to1.ru" target="_blank">P-TO1.RU</a></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-gear"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">&nbsp;</span>
                                <span class="info-box-number"><a href="http://24to.org" target="_blank">24TO.ORG</a></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="fa fa-gear"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">&nbsp;</span>
                                <span class="info-box-number"><a href="http://to95.net" target="_blank">TO95.NET</a></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="box box-warning" id="companies">
            <div class="box-header with-border bg-gray-light">
                <h3 class="box-title">{{trans('general.Companies')}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body bg-gray-light">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">АДОНИС</span> <span
                                        class="info-box-number"><a href="http://www.adonis.perm.ru/physical/auto/osago/"
                                                                   target="_blank">www.adonis.perm.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Ажурал АСКО</span> <span
                                        class="info-box-number"><a href="https://www.acko.ru/calculation/osago/"
                                                                   target="_blank">www.acko.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Альфа Страхование</span> <span
                                        class="info-box-number"><a
                                            href="http://www.alfastrah.ru/landing/eosago/?utm_source=popuposago&utm_medium=popup&utm_campaign=popuposago"
                                            target="_blank">www.alfastrah.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">АНГАРА</span> <span
                                        class="info-box-number"><a href="http://www.ic-angara.ru/individuals/transport/"
                                                                   target="_blank">www.ic-angara.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">АстроВолга</span> <span
                                        class="info-box-number"><a href="http://www.astro-volga.ru/index.php?event=p302"
                                                                   target="_blank">www.astro-volga.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">БАСК</span> <span
                                        class="info-box-number"><a
                                            href="http://www.icbask.ru/insurance/chastnym-klientam/strakhovanie-otvetstvennosti/"
                                            target="_blank">www.icbask.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">ВСК</span> <span
                                        class="info-box-number"><a href="http://shop.vsk.ru/osago/calculation/"
                                                                   target="_blank">shop.vsk.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">ВТБ Страхование</span> <span
                                        class="info-box-number"><a
                                            href="https://www.vtbins.ru/individual/auto_insurance/osago/#online"
                                            target="_blank">www.vtbins.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">ГАЙДЕ</span> <span
                                        class="info-box-number"><a href="https://guideh.com/rasschitat-stoimost/osago/"
                                                                   target="_blank">guideh.com</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Гелиос</span> <span
                                        class="info-box-number"><a href="http://skgelios.ru/products/auto/"
                                                                   target="_blank">skgelios.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">ДальАкфес</span> <span
                                        class="info-box-number"><a
                                            href="http://www.dalacfes.ru/index.php/individuals-ins/auto-ins/osago-ins.html"
                                            target="_blank">www.dalacfes.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Зетта Страхование</span> <span
                                        class="info-box-number"><a
                                            href="https://osago.zettains.ru/webclaimexpert/Auth.jasp" target="_blank">osago.zettains.ru</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Ингосстрах</span> <span
                                        class="info-box-number"><a
                                            href="https://www.ingos.ru/ru/private/auto/osago/calc/#1" target="_blank">www.ingos.ru</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">ИНТАЧ</span> <span
                                        class="info-box-number"><a href="https://www.in-touch.ru/calc/osago/step1.php"
                                                                   target="_blank">www.in-touch.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Либерти</span> <span
                                        class="info-box-number"><a
                                            href="https://www.liberty24.ru/private-customers/products/e-osago/kak-kupit-polis/"
                                            target="_blank">www.liberty24.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">МАКС</span> <span
                                        class="info-box-number"><a href="https://www.makc.ru/market/calculators/osago/"
                                                                   target="_blank">www.makc.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Мегарусс-Д</span> <span
                                        class="info-box-number"><a href="http://www.megarussd.com/content/e-osago"
                                                                   target="_blank">www.megarussd.com</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Мед-Гарант</span> <span
                                        class="info-box-number"><a href="http://med-garant.ru/strahuslugi/osago/"
                                                                   target="_blank">med-garant.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Московия</span> <span
                                        class="info-box-number"><a href="http://eosago.mos.com.ru/" target="_blank">eosago.mos.com.ru</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Надежда</span> <span
                                        class="info-box-number"><a
                                            href="http://www.nadins.ru/strahovanie-fizicheskih-lic/avtostrahovanie/osago/#preorder_form"
                                            target="_blank">www.nadins.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">ОСК</span> <span
                                        class="info-box-number"><a
                                            href="http://www.osk-ins.ru/?p=7&cat=34&subcat=46&subcat2=52"
                                            target="_blank">www.osk-ins.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">ПАРИТЕТ СК</span> <span
                                        class="info-box-number"><a href="http://www.paritet-sk.ru/section19/663/"
                                                                   target="_blank">www.paritet-sk.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">ПРОМИНСТАХ</span> <span
                                        class="info-box-number"><a
                                            href="http://prominstrah.ru/chastnym-klientam/avtomobil/e-osago/"
                                            target="_blank">prominstrah.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">ПСА</span> <span
                                        class="info-box-number"><a href="http://www.psa-insur.com/avtomobil.html"
                                                                   target="_blank">www.psa-insur.com</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">РГС</span> <span
                                        class="info-box-number"><a
                                            href="http://www.rgs.ru/products/private_person/auto/osago/brief/index.wbp"
                                            target="_blank">www.rgs.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Ренессанс Страхование</span> <span
                                        class="info-box-number"><a href="http://www.renins.com/buy/auto#edit/new/data"
                                                                   target="_blank">www.renins.com</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">РЕСО-Гарантия</span> <span
                                        class="info-box-number"><a href="http://www.reso.ru/Online/" target="_blank">www.reso.ru</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">РОСЭНЕРГО</span> <span
                                        class="info-box-number"><a href="http://nsg-rosenergo.ru/auto/index"
                                                                   target="_blank">nsg-rosenergo.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">СДС</span> <span
                                        class="info-box-number"><a href="http://sksds.ru/online-entry/" target="_blank">sksds.ru</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">СЕРВИСРЕЗЕРВ</span> <span
                                        class="info-box-number"><a href="http://www.svrez.ru/calculators/osago/"
                                                                   target="_blank">www.svrez.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Сибирский Спас</span> <span
                                        class="info-box-number"><a href="http://www.sibspas.ru/insurancebiz/auto/osago/"
                                                                   target="_blank">www.sibspas.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">СКО</span> <span
                                        class="info-box-number"><a href="http://www.opora-ins.ru/ru/private/avto/osago/"
                                                                   target="_blank">www.opora-ins.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Согаз Страхование</span> <span
                                        class="info-box-number"><a
                                            href="https://direct.sogaz.ru/products/automobile/osago/calc/"
                                            target="_blank">direct.sogaz.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Согласие</span> <span
                                        class="info-box-number"><a
                                            href="http://www.soglasie.ru/making-policy/calculation-casco-osago/?AB=1"
                                            target="_blank">www.soglasie.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">СТЕРХ</span> <span
                                        class="info-box-number"><a
                                            href="http://www.rsk-sterh.ru/index.php/chastnym-litsam" target="_blank">www.rsk-sterh.ru</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">СТРАЖ</span> <span
                                        class="info-box-number"><a
                                            href="http://www.skstrazh.ru/index.php/component/content/article?id=189"
                                            target="_blank">www.skstrazh.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">СургутНефтеГаз</span> <span
                                        class="info-box-number"><a href="https://www.sngi.ru/calc/calc_1.html"
                                                                   target="_blank">www.sngi.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">ТАЛИСМАН</span> <span
                                        class="info-box-number"><a href="https://talisman-so.ru/individual/auto/osago"
                                                                   target="_blank">talisman-so.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Энергогарант</span> <span
                                        class="info-box-number"><a href="https://eosago.energogarant.ru/"
                                                                   target="_blank">eosago.energogarant.ru</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">ЭРГО</span> <span
                                        class="info-box-number"><a href="https://eosago.ergo.ru/osago/policy/"
                                                                   target="_blank">eosago.ergo.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Югория</span> <span
                                        class="info-box-number"><a
                                            href="https://www.ugsk.ru/regions/private/osago/#price" target="_blank">www.ugsk.ru</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box"><span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                            <div class="info-box-content"><span class="info-box-text">Якорь</span> <span
                                        class="info-box-number"><a href="http://www.yakor.ru/legal-entities/osago/"
                                                                   target="_blank">www.yakor.ru</a></span></div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="box box-warning" id="delivery">
            <div class="box-header with-border">
                <h3 class="box-title">{{trans('general.Delivery')}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <iframe src="http://www.kpas.ru/index2.html" frameborder="0" width="100%" height="1000"></iframe>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
@endsection