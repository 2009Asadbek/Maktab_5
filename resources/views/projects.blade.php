@extends('layouts.index')
@section('content')

    <div class="mainContent withImage">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle">@lang('words.projects')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('words.projects')</li>
                    </ol>
                </nav>
                <div class="imageBox">
                    <img alt="." src="/img/zm.jpg">
                </div>
            </div>
        </div>

        <div class="container">

            <div class="projectsList">

                <a class="item" href="/uz/projects/15">
                    <img alt="logo" src="/uploads/2022/03/ANCl5FdApcQtCSosDRpUmBb0JxkLJMWq.jpg">
                    <div class="description">
                        <h1>Edukids</h1>
                        <h3>EduKids - o&lsquo;quvchi-yoshlar uchun mo&lsquo;ljallangan bo&lsquo;lib, yosh avlodni kelajakda
                            muvaffaqiyatga erishish va o&lsquo;z ustida ishlashga chaqirish, shuningdek o&lsquo;quvchilarda
                            ma&rsquo;lum bir mavzular bo&lsquo;yicha aniq tasavvurni shakllantirishga qaratilgan 100 dan
                            ortiq ilmiy-ommabop animasion dayjestlar to&lsquo;plamidir.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/14">
                    <img alt="logo" src="/uploads/2021/10/GOblsQG5A_FGOSqHu7i3myjphxCJfqDd.jpg">
                    <div class="description">
                        <h1>Maktab.uz</h1>
                        <h3>Masofaviy ta&rsquo;lim platformasi. Ushbu platforma masofaviy ta&rsquo;lim jarayonini amaliyotga
                            keng joriy etish, ta&rsquo;lim berishda innovatsion shakl va usullaridan samarali foydalanish,
                            sinflar kesimida barcha mavzular bo&lsquo;yicha videodarslar bazasini yaratish imkoniyatini
                            beradi.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/13">
                    <img alt="logo" src="/uploads/2021/10/d88U4DhybhQWnGZJGVBepE9cRO6vv4mw.jpg">
                    <div class="description">
                        <h1>Uzbekcoders.uz</h1>
                        <h3>Dasturlashni o&lsquo;rganish uchun ochiq va bepul onlayn platforma. &nbsp;Ushbu onlayn portal 4
                            ta yo&lsquo;nalish (ma&rsquo;lumotlar tahlili (Data analysis), android ilovalar (Android),
                            Front-End, Full-Stack) bo&lsquo;yicha istagan kishiga IT-mutaxassisliklarni mutlaqo bepul
                            o&lsquo;rganish imkoniyatini beradi.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/12">
                    <img alt="logo" src="/uploads/2021/10/98CiO9wMZtFU8WVEG0NeijKmHdwmPaGL.jpg">
                    <div class="description">
                        <h1>Onlinedu.uz</h1>
                        <h3>Uzluksiz kasbiy ta&rsquo;lim platformasi.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/11">
                    <img alt="logo" src="/uploads/2021/10/jFpPZE6I_C854ZhUC4LhCOOEYzqNtb4W.jpg">
                    <div class="description">
                        <h1>Ish.uzedu.uz</h1>
                        <h3>Ushbu tizim bo&lsquo;sh ish o&lsquo;rinlari bo&lsquo;yicha ma&rsquo;lumotlarni e&rsquo;lon
                            qilish va malakali kadrlarni topishga hamda ularni ish bilan ta&#39;minlash imkoniyatini
                            yaratadi.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/10">
                    <img alt="logo" src="/uploads/2021/10/TQ7qkhYTCwdPZ3BBmpznuBLuc24TwCEN.jpg">
                    <div class="description">
                        <h1>Smartland</h1>
                        <h3>Interfaol virtual ta&rsquo;lim platformasi. Ushbu ta&rsquo;lim platformasi orqali bolalar
                            bo&lsquo;sh vaqtlarini mazmunli o&lsquo;tkazishlari uchun interaktiv ko&lsquo;rinishdagi
                            mantiqiy o&lsquo;yinlar to&lsquo;plamidan foydalanishlari mumkin.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/9">
                    <img alt="logo" src="/uploads/2021/10/F65dDRK5TyempWSPdtapMnwLsQYmDe9v.jpg">
                    <div class="description">
                        <h1>Ustozmukofoti.uz </h1>
                        <h3>Portal zamonaviy talablarni inobatga olgan holda xalqaro tajriba asosida tanlov o&#39;tkazish
                            orqali faol va salohiyatli pedagog va murabbiylarni qo&#39;llab-quvvatlash, rag&#39;batlantirish
                            maqsadida ishlab chiqilgan.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/8">
                    <img alt="logo" src="/uploads/2021/10/RovlL2cUmiYnTPSQg6FO_XZhaWrvhf0K.jpg">
                    <div class="description">
                        <h1>Olympiad.uzedu.uz</h1>
                        <h3>Fan olimpiadalarining onlayn platformasi boʻlib, onlayn olimpiadalar tashkil etish va iqtidorli
                            o&lsquo;quvchilar bazasini shakllantirish axborot tizimi. Ushbu tizim orqali 4-11-sinf
                            o&lsquo;quvchilari masofadan turib 6 ta fandan olimpiadalarda ishtirok etish imkonini beradi.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/7">
                    <img alt="logo" src="/uploads/2021/10/Fdy6V1JQKi5NRNFhNYjfzsnb-M1iCm8Z.jpg">
                    <div class="description">
                        <h1>Idea.uzedu.uz</h1>
                        <h3>Mazkur platforma o&lsquo;quvchi-yoshlarning xalq ta&rsquo;limi tizimini rivojlantirish
                            bo&lsquo;yicha g&lsquo;oya va takliflarini shakllantirish va ularni qo&lsquo;llab-quvvatlashga
                            mo&#39;ljallangan. Ushbu platformaning maqsadi foydalanuvchilarning taklif va g&lsquo;oyalarini
                            yig&lsquo;ish, saralash va amaliyotga joriy etishga yo&lsquo;naltirish, innovatsiyalarni joriy
                            etishda fuqarolarning ishtirokini ta&rsquo;minlashdan iborat.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/6">
                    <img alt="logo" src="/uploads/2021/10/IO5eA5EjEnfvQ5wzpYIUaNv1YPx4EbAC.jpg">
                    <div class="description">
                        <h1>Kundalik.com</h1>
                        <h3>Elektron baholash tizimi, ota-ona va o&lsquo;quvchilarga darslarni o&lsquo;zlashtirishni onlayn
                            kuzatish va monitoring qilish imkoniyatini beradi. Respublika bo&lsquo;yicha 2020-2021
                            o&lsquo;quv yilida 2 500 dan ortiq maktabda elektron jurnal Kundalik.com tizimi joriy etildi.
                            2021-2022 o&lsquo;quv yilida esa 4 mingdan ortiq maktablarda joriy etilishi rejalashtirilgan.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/5">
                    <img alt="logo" src="/uploads/2021/10/XQ_iStZ1GFRDfYQbWjOf82biildlYEun.jpg">
                    <div class="description">
                        <h1>Attestat.uzedu.uz</h1>
                        <h3>Elektron shahodatnoma platformasi. Xalq ta&rsquo;limi tizimidagi maktab bitiruvchilari
                            to&lsquo;g&lsquo;risidagi ma&rsquo;lumotlarni avtomatlashtirish maqsadida &ldquo;Attestat&rdquo;
                            avtomatlashtirilgan axborot tizimi ishga tushirildi. Bugungi kunda jismoniy shaxsning shaxsiy
                            identifikasiya raqami (JSHSHIR) bilan bog&lsquo;langan holda 1,7 mln. bitiruvchilarning
                            shahodatnomalari raqamlashtirilgan.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/4">
                    <img alt="logo" src="/uploads/2021/10/BFjwSXUVJKvUcxglIP2feU2wdVXfW7_O.jpg">
                    <div class="description">
                        <h1>Kitob.uz</h1>
                        <h3>O&lsquo;quvchilar o&lsquo;rtasida kitobxonlikni yanada kengaytirish bo&lsquo;yicha elektron
                            portal. Kitob.uz axborot tizimiga 2 100 dan ortiq adabiyotlarning elektron va audio shakllari
                            yuklandi. Shuningdek, portalning Android va iOS operatsion tizimlari uchun mobil ilovalari ishga
                            tushirildi hamda 20 mingga yaqin foydalanuvchilar tomonidan yuklab olindi.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/2">
                    <img alt="logo" src="/uploads/2021/10/knTaeZ6iVCSwGkfkFT31xXy-_keb6m1k.jpg">
                    <div class="description">
                        <h1>My.maktab.uz</h1>
                        <h3>Umumta&rsquo;lim maktablariga o&lsquo;quvchilarni onlayn qabul qilish tizimi. Ushbu tizim
                            ota-onalarga qulaylik yaratish, vaqtni tejash va byurokratik to&lsquo;siqlarni kamaytirish kabi
                            sharoitlarni yaratadi.
                        </h3>
                    </div>
                </a>

                <a class="item" href="/uz/projects/1">
                    <img alt="logo" src="/uploads/2021/10/leky-TCW6_bj0YTIhb1gKXWcKUTVmBTF.jpg">
                    <div class="description">
                        <h1>“Zamonaviy maktab”larni baholash jarayonini tashkil etish” loyihasi</h1>
                        <h3>Mazkur loyiha O&lsquo;zbekiston Respublikasi Prezidentining 2019-yil 26-noyabrdagi PQ-4537-sonli
                            &ldquo;Zamonaviy maktab&rdquo;larni tashkil etish chora-tadbirlari
                            to&lsquo;g&lsquo;risida&rdquo;gi qarorini o&lsquo;z vaqtida va sifatli ijrosini ta&rsquo;minlash
                            maqsadida ishlab chiqilgan. Loyiha doirasida &ldquo;Zamonaviy maktab&rdquo;larni baholash
                            jarayonini tashkil etish bo&lsquo;yicha xalqaro tajriba, milliy tizimdagi holat o&lsquo;rganildi
                            hamda loyihaning konsepsiyasi tasdiqlandi. Shu bilan birgalikda, manfaatdor vazirlik va idoralar
                            bilan birgalikda &ldquo;Zamonaviy maktab&rdquo;larga qo&lsquo;yiladigan talablar, tartib va
                            metodikalar ishlab chiqildi va tasdiqlandi. 2020-yilda ishlab chiqilgan talablar, tartib va
                            metodika asosida respublika bo&lsquo;yicha 11 ta maktabda aprobatsiya o&lsquo;tkazildi.
                            2021-yilda esa yana 42 ta maktabda aprobatsiya o&lsquo;tkazildi, talablar takomillashtirildi,
                            iyul oyi oxiriga qadar sertifikat berish rejalashtirilgan.
                        </h3>
                    </div>
                </a>
            </div>
        </div>
    </div>

   @endsection
