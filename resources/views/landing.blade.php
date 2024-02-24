<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">
    <header class="bg-white items-center justify-between w-full">
        <div class="border-b border-blue-200">
            <div class="flex justify-between mx-auto max-w-7xl w-1230 h-10 items-center">
                <div class="flex gap-5">
                    <div class="flex gap-5">
                        <img src="/images/call.png" alt="call rasmi" class="h-5 relative top-0.5 left-1">
                         998 90 821 2776
                    </div>
                    <div class="flex gap-5">
                        <div class="">
                        <img src="/images/mail-01.png" alt="sms rasmi" class="h-5 relative top-0.5 left-2">
                        </div>
                        <h1 class="relative left-2">email: help@mercuryedu.uz</h1>
                    </div>
                </div>
                <div class="text-blue-600 font-semibold">
                    Студентам
                </div>
            </div>
        </div>
        <!-- Menu -->
        <div class="py-4 shadow shadow-blue-100">
            <div class="flex justify-between mx-auto max-w-7xl place-items-center">
                <div>
                    <img src="{{ asset('/images/logo.png') }}" alt="" class="h-10">
                </div>
                <ul class="flex place-items-center space-x-4 font-medium">
                    <li>О нас</li>
                    <li>Тарифы</li>
                    <li>Партнеры</li>
                    <li>Контакты</li>
                    <select name="" id="">
                        <option value="">
                        <li>Ру</li>
                        </option>
                        <option value="">
                        <li>Uzb</li>
                        </option>
                        <option value="">
                        <li>Eng</li>
                        </option>
                    </select>
                    <li>
                        <button class="px-3 py-3 rounded-full bg-blue-700 text-white">
                            Зарегистрироваться
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </header>


   <!-- Banner -->
   <div class="flex max-w-7xl mx-auto place-items-center mt-12">
        <div class="flex-row grid gap-16">
            <div class="font-bold text-4xl leading-20 tracking-normal text-left">
                Запустите собственную </br><span class="font-bold text-blue-700">онлайн-школу</span> за 1 день
            </div>
            <div class="text-gray-500 relative bottom-10">
                Создавайте курсы любой сложности, собирайте базы студентов, принимайте оплаты и управляйте всеми
                процессами
            </div>
            <div>
                <button class="py-4 px-8 w-60  rounded-full  gap-10 bg-blue-700 text-white relative bottom-10">
                    Запустить
                </button>
            </div>
        </div>
        <div>
            <img src="{{ asset('/images/baner-image.png') }}" alt="banner">
        </div>
    </div>

      <!-- Features -->
    <div class="flex-row max-w-7xl mx-auto text-center mt-12">
        <div class=" font-bold text-2xl md:text-3xl lg:text-4xl xl:text-5xl">
            <span class="text-blue-700">Mercury</span> — это ...
        </div>
        <div class="flex space-x-4 mt-12">
            <div class="border rounded-xl  border-blue-200 bg-gradient-to-t from-purple-300 to-white">
                <div class="rounded-full h-6 w-6 bg-gray-200"><img src="{{ asset('/images/elements.png') }}" alt="banner"></div>
                <div>Высокая скоростьи стабильность</div>
                <div class="text-xs">Мы арендуем мощные сервера по всему СНГдля того, чтобы ни один клиент не
                    столкнулсяс подтормаживанием при просмотре ваших уроков</div>
            </div>
            <div class="border rounded-xl border-blue-200 p-2 bg-gradient-to-t from-purple-300 to-white">
                <div class="rounded-full h-6 w-6 bg-gray-200"><img src="{{ asset('/images/elements.png') }}" alt="banner"></div>
                <div>Высокая скоростьи стабильность</div>
                <div class="text-xs">Мы арендуем мощные сервера по всему СНГдля того, чтобы ни один клиент не
                    столкнулсяс подтормаживанием при просмотре ваших уроков</div>
            </div>
            <div class="border rounded-xl border-blue-200 p-2 bg-gradient-to-t from-purple-300 to-white">
                <div class="rounded-full h-6 w-6 bg-gray-200"><img src="{{ asset('/images/elements.png') }}" alt="banner"></div>
                <div>Высокая скоростьи стабильность</div>
                <div class="text-xs">Мы арендуем мощные сервера по всему СНГдля того, чтобы ни один клиент не
                    столкнулсяс подтормаживанием при просмотре ваших уроков</div>
            </div>
            <div class="border rounded-xl border-blue-200 p-2 bg-gradient-to-t from-purple-300 to-white">
                <div class="rounded-full h-6 w-6 bg-gray-200"><img src="{{ asset('/images/elements.png') }}" alt="banner"></div>
                <div>Высокая скоростьи стабильность</div>
                <div class="text-xs">Мы арендуем мощные сервера по всему СНГдля того, чтобы ни один клиент не
                    столкнулсяс подтормаживанием при просмотре ваших уроков</div>
            </div>
        </div>
    </div>

       <!-- Achievements -->
       <div class="flex-row max-w-7xl mx-auto items-center justify-between mt-20">
        <div class="text-center font-bold text-3xl">100+ курсов в Узбекистане запущено</br>
            через <span class="text-blue-700">Mercury</span></div>
        <div class="flex">
            <div>
                <div class="text-2xl text-blue-700 font-bold text-center decoration-blue-200 relative top-14 left-10">124 платформы</div>
                <div class="text-center font-semibold text-sm relative top-20 left-10">
                    Запущено для проведения курсов,<br>вебинаров, тренингов и мастер-классов
                    <img src="images/vector.png" alt="vector rasmi" class="w-40 relative top-7 left-32">
                </div>
            </div>
            <div>
                <div class="text-2xl text-blue-700 font-bold text-center relative top-44 left-24">$270,000</div>
                <div class="text-center font-semibold text-sm relative top-48 left-24">
                    Суммарный доход всех запущенных<br> платформ
                    <img src="images/vector1.png" alt="vector rasmi" class=" w-40 relative bottom-48 left-32 ">
                </div>
            </div>
            <div>
                <div class="text-3xl text-blue-700 font-bold text-center relative top-16 left-44">8000+</div>
                <div class="text-center font-semibold text-sm relative top-20 left-44">
                    Студентов просмотрели курсы,<br>вебинары и тренинги
                    <img src="images/vector2.png" alt="vector rasmi" class=" w-40 relative top-5 left-28">
                </div>
            </div>
            <div>
                <div class="text-3xl text-blue-700 font-bold text-center relative top-40 left-72">20 часов</div>
                <div class="text-center font-semibold text-sm relative left-72 top-44">
                    Среднее время подготовки новой<br> платформы для работы
                </div>
            </div>
        </div>
    </div>
  <!-- Demo request -->
  <div class="w-full h-80 bg-gradient-to-r from-purple-700 via-blue-600 to-blue-900 float relative top-40">
        <div class="max-w-7xl mx-auto grid grid-cols-2 py-40">
            <div class="text-gray-200 text-2xl font-semibold leading-13 tracking-normal relative left-20">
                Вы хотите запросить демо-версию  или просто задать вопрос? Напишите нам
            </div>
            <div class="flex justify-end">
                <button
                    class="py-4 px-2 w-40 h-14 rounded-full  gap-10 bg-white font-semibold relative right-40 ">Протестировать</button>
            </div>
        </div>
    </div>

      <!-- Starting steps -->
      <div class="flex-row relative top-44">
        <div class="mx-auto text-center text-2xl font-semibold leading-14 tracking-normal text-left relative top-5">Как начать обучать
            <span class="text-blue-700">клиентов</span> уже завтра?
        </div>
        <div class="max-w-3xl mx-auto">
            <div class="flex">
                <div class="w-1/2 relative top-60">
                    <div class="text-lg font-bold leading-11 tracking-normal relative bottom-44">Вы связываетесь с нами</div>
                    <div class="text-gray-700 relative bottom-40">Расскажите о вашем продукте, предоставьте логотипы, баннеры, тексты и то,
                        как вы видите свой будущий сайт</div>
                </div>
                <div class="w-48 absolute  rotate-90 border-2 border-dashed border-gray-300"></div>
                <div class="w-1/2 text-6xl font-extrabold  relative top-14 left-20">01</div>
            </div>
            <div class="flex">
                <div class="w-1/2 text-6xl font-extrabold relative top-20 left-60">02</div>
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal relative top-20 left-20">Мы готовим демонстрацию</div>
                    <span class="relative top-24 left-20">Мы готовим демонстрацию Пройдите весь путь клиента от первого визита до окончания 
                        курса, посмотрите панель управления, научитесь редактировать сайт</span>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left relative top-40">Принимаете решение</div>
                    <span class="relative top-44">Решите, подходит ли вам решение от 
                        Mercury (оно, кстати, подходит 80% наших клиентов), а затем произведите оплату</span>
                </div>
                <div class="w-1/2 text-6xl font-extrabold text-left relative top-32 left-20">03</div>
            </div>
            <div class="flex">
                <div class="w-1/2 text-6xl font-extrabold relative top-80">04</div>
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left relative top-80">Подготовьте свой сайт</div>
                    <span class="relative top-80">Создайте креативные лендинги, оформите свои курсы, тренинги и семинары, запустите 
                        рекламу для привлечения клиентов</span>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal relative top-96 left-40">Собирайте базу</div>
                    <span class="relative top-80">Вовлекайте клиентов в свой продукт, создавайте рассылки, связывайтесь с 
                        ними через телефон, мессенджеры или создайте общий чат</span>
                </div>
                <div class="w-1/2 text-6xl font-extrabold text-left relative top-80">05</div>
            </div>
            <div class="flex">
                <div class="w-1/2 text-6xl font-extrabold relative top-80">06</div>
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left">Покажите ценность своего продукта</div>
                    <span>Создайте автоворонку, делитесь полезными материалами и статьями, 
                        проводите бесплатные вебинары и подводите клиентов к покупке</span>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left">Принимайте платежи</div>
                    <span>Принимайте платежи Мы сделаем все возможное, чтобы клиент не столкнулся ни с какими 
                        проблемами, когда дело доходит до оплаты. Все пройдет, как нужно, вам осталось выбрать удобные способы оплаты</span>
                </div>
                <div class="w-1/2 text-6xl font-extrabold text-left">07</div>
            </div>
            <div class="flex">
                <div class="w-1/2 text-6xl font-extrabold">08</div>
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left">Развивайтесь!</div>
                    <span>Собирайте статистику, создавайте кампании допродаж, повышайте лояльность клиентов и повышайте количество продаж в пару кликов!</span>
                </div>
            </div>
        </div>
    </div>

     <!-- Pricing -->
     <div class="max-w-7xl flex-row mx-auto relative top-52">
        <div class="flex-row text-center">
            <div class="text-2xl font-semibold tracking-normal mb-5"> Выберите
                <span class="text-blue-600 font-bold">тариф</span>
            </div>
            <div class="text-lg font-bold tracking-normal mb-10">Сколько проектов — столько и вариантов реализации.
                </br>Выберите то, что подходит вашему продукту</div>
        </div>
        <div class="flex space-x-4 mt-5 text-center">
            <div class="rounded-xl bg-blue-50 p-8 bg-gray-100">
                <div class="text-xl font-bold  mb-6">Вебинар</div>
                <div class="mb-6 text-gray-400">Подходит, если вам нужно постоянно продавать одинаковый продукт</div>
                <div>
                    <span class="font-bold">от</span>
                    <span class="font-bold text-2xl">300$</span>
                </div>
                <ul class="grid gap-y-4 mt-6 font-semibold">
                    <li>Платформа для вебинара</li>
                    <li>Чат и рассылка по клиентам</li>
                    <li>Автоворонка</li>
                    <li>Отправка записей и материаловна почту участникам</li>
                </ul>
                <button class="py-2 w-60 h-14 rounded-full bg-blue-700 text-white my-12 font-semibold">Заказать</button>
            </div>
            <div class="rounded-xl bg-blue-50 p-8 relative bottom-7 bg-gray-100">
                <div class="text-xl font-bold mb-6">Курс</div>
                <div class="mb-6 text-gray-400">Курс Подходит, если у вас есть курс из нескольких уроков с 
                    домашними заданиями и разными тарифами</div>
                <div>
                    <span class="font-bold">от</span>
                    <span class="font-bold text-2xl">600$</span>
                </div>
                <ul class="grid gap-y-4 mt-6 font-semibold">
                    <li>Платформа для создания и ведения курса</li>
                    <li>Платформа для вебинаров</li>
                    <li>Чат и рассылка по клиентам, подключение мессенджером</li>
                    <li>Автоворонки и рекламные кампании</li>
                    <li>Конструктор лендингов</li>
                    <li>Сквозная аналитика и подключение сторонних сервисов</li>
                    <li>Интерфейс для клиентов, администраторов и учителей</li>
                </ul>
                <button class="py-2 w-60 h-14 rounded-full bg-blue-700 text-white my-12">Заказать</button>
            </div>
            <div class="rounded-xl bg-blue-50 p-8 bg-gray-100">
                <div class="text-xl font-bold mb-6">Онлайн-школа</div>
                <div class="mb-6 text-gray-400">Бесконечное количество курсов, тарифов, сотрудников и вариантов развития</div>
                <div>
                    <span class="font-bold text-2xl">Договорная</span>
                </div>
                <ul class="grid gap-y-4 mt-6 font-semibold">
                    <li>Конструктор новых курсов</li>
                    <li>Дополнительные сайты и платформы</li>
                    <li>Поддержка создания курсов вашими клиентами</li>
                    <li>Мгновенная прямая связь с поддержкой</li>
                </ul>
                <button class="py-2 w-60 h-14 rounded-full bg-blue-700 text-white my-12">Заказать</button>
            </div>
        </div>
    </div>


      <!-- Brands --> 
      <div class="max-w-7xl mx-auto relative top-64">
        <div class="text-center text-2xl font-bold tracking-normal mb-5">Мы сотрудничаем с ведущими <span
                class="text-blue-700">компаниями</span></div>
        <div class="flex space-x-5">
            <!-- justify text center vertiacaly -->
            <div class="w-64 h-24 relative top-5 left-4">
                <img src="{{asset('/images/Group 24.png')}}" alt="">
            </div>
            <div class="w-64 h-24 relative top-8 left-4">
                <img src="{{asset('/images/Group 25.png')}}" alt="">
            </div>
            <div class="w-64 h-24 relative top-4">
                <img src="{{asset('/images/Group 22.png')}}" alt="">
            </div>
            <div class="w-64 h-24 relative top-5">
                <img src="{{asset('/images/Group 21.png')}}" alt="">
            </div>
            <div class="w-64 h-24 relative top-7 left-7">
                <img src="{{asset('/images/Group 19.png')}}" alt="">
            </div>
        </div>
    </div>

    <!-- Feedbacks -->
    <div class="max-w-7xl mx-auto relative top-96 ">
        <div class="text-center text-2xl font-bold tracking-normal mb-5">Мнения клиентов <span
                class="text-blue-700">о нас</span></div>
        <div class="flex space-x-4">
            <div class="rounded-2xl shadow-2xl shodow-white-100 w-3/4 h-4/5 py-10 px-6">
                <div class="flex items-center space-x-2">
                    <div class="bg-gray-100 w-16 h-16 rounded-full "><img src="{{asset('/images/ellipse3.png')}}" alt="" class=" w-20 h-16"></div>
                    <div>
                    
                        <h2 class="font-semibold text-base font-medium leading-6 tracking-normal">Charles Patterson
                        </h2>
                        <div class="text-gray-600">Google Inc.</div>
                    </div>
                    <span class="relative left-32 bottom-2">
                        <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32 3.61111C29.0768 4.09259 26.931 5.29629 25.5627 7.22222C24.1944 9.08796 23.448 11.4051 23.3236 14.1736C23.6346 14.0532 23.9456 13.963 24.2566 13.9028C24.6297 13.7824 25.034 13.7222 25.4694 13.7222C27.2731 13.7222 28.6725 14.294 29.6676 15.4375C30.725 16.581 31.2536 18.0255 31.2536 19.7708C31.2536 21.5764 30.6939 23.081 29.5743 24.2847C28.4548 25.4282 26.8999 26 24.9096 26C23.0437 26 21.4888 25.338 20.2449 24.0139C19.001 22.6898 18.379 20.7338 18.379 18.1458C18.379 13.9931 18.9388 10.6227 20.0583 8.03472C21.1778 5.44675 22.7638 3.52083 24.8163 2.25694C26.8688 0.932867 29.2634 0.180553 32 0V3.61111ZM13.7143 3.61111C10.7911 4.09259 8.64529 5.29629 7.27697 7.22222C5.90865 9.08796 5.16229 11.4051 5.0379 14.1736C5.28669 14.0532 5.56657 13.963 5.87755 13.9028C6.25073 13.7824 6.655 13.7222 7.09038 13.7222C8.89407 13.7222 10.3246 14.294 11.3819 15.4375C12.4393 16.581 12.9679 18.0255 12.9679 19.7708C12.9679 21.5764 12.3771 23.081 11.1953 24.2847C10.0758 25.4282 8.55199 26 6.62391 26C4.69582 26 3.10982 25.338 1.86589 24.0139C0.621963 22.6898 0 20.7338 0 18.1458C0 13.9931 0.559767 10.6227 1.6793 8.03472C2.79883 5.44675 4.38484 3.52083 6.43732 2.25694C8.4898 0.932867 10.9155 0.180553 13.7143 0V3.61111Z"
                                fill="black" />
                        </svg>
                    </span>
                </div>
                <div class="text-sm text-gray-600 mt-6">Платформа проста и удобна в использовании. 
                    Отличные возможности, интуитивный интерфейс. Очень доволен!</div>
            </div>
            <div class="rounded-2xl shadow-2xl shadow-white-100 w-4/5 h-1/2 py-8 px-6">
                <div class="flex items-center space-x-2 relative left-5">
                    <div class="bg-gray-100 w-16 h-16 rounded-full"><img src="{{asset('/images/ellipse1.png')}}" alt="" class=" w-20 h-16 relative"></div>
                    <div>
                        <h2 class="font-semibold text-base font-medium leading-6 tracking-normal">Vera Duncan
                        </h2>
                        <div class="text-gray-600 relative">Amazon Inc.</div>
                    </div>
                    <span class="relative left-40">
                        <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32 3.61111C29.0768 4.09259 26.931 5.29629 25.5627 7.22222C24.1944 9.08796 23.448 11.4051 23.3236 14.1736C23.6346 14.0532 23.9456 13.963 24.2566 13.9028C24.6297 13.7824 25.034 13.7222 25.4694 13.7222C27.2731 13.7222 28.6725 14.294 29.6676 15.4375C30.725 16.581 31.2536 18.0255 31.2536 19.7708C31.2536 21.5764 30.6939 23.081 29.5743 24.2847C28.4548 25.4282 26.8999 26 24.9096 26C23.0437 26 21.4888 25.338 20.2449 24.0139C19.001 22.6898 18.379 20.7338 18.379 18.1458C18.379 13.9931 18.9388 10.6227 20.0583 8.03472C21.1778 5.44675 22.7638 3.52083 24.8163 2.25694C26.8688 0.932867 29.2634 0.180553 32 0V3.61111ZM13.7143 3.61111C10.7911 4.09259 8.64529 5.29629 7.27697 7.22222C5.90865 9.08796 5.16229 11.4051 5.0379 14.1736C5.28669 14.0532 5.56657 13.963 5.87755 13.9028C6.25073 13.7824 6.655 13.7222 7.09038 13.7222C8.89407 13.7222 10.3246 14.294 11.3819 15.4375C12.4393 16.581 12.9679 18.0255 12.9679 19.7708C12.9679 21.5764 12.3771 23.081 11.1953 24.2847C10.0758 25.4282 8.55199 26 6.62391 26C4.69582 26 3.10982 25.338 1.86589 24.0139C0.621963 22.6898 0 20.7338 0 18.1458C0 13.9931 0.559767 10.6227 1.6793 8.03472C2.79883 5.44675 4.38484 3.52083 6.43732 2.25694C8.4898 0.932867 10.9155 0.180553 13.7143 0V3.61111Z"
                                fill="black" />
                        </svg>
                    </span>
                </div>
                <div class="text-base text-gray-600 mt-6 relative left-4">Эта платформа - находка для предпринимателей!Интуитивный интерфейс
                     и множество полезных инструментов. Очень доволен результатами.</div>
            </div>
            <div class="rounded-2xl shadow-2xl shadow-white-100 w-3/4 h-4/5 py-9 px-6">
                <div class="flex items-center space-x-2">
                    <div class="bg-gray-100 w-16 h-16 rounded-full"><img src="{{asset('/images/ellipse2.png')}}" alt="" class=" w-20 h-16"></div>
                    <div>
                        <h2 class="font-semibold text-base font-medium leading-6 tracking-normal">Bruce Hardy
                        </h2>
                        <div class="text-gray-600">Paypal Inc.</div>
                    </div>
                    <span class="relative left-32">
                        <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32 3.61111C29.0768 4.09259 26.931 5.29629 25.5627 7.22222C24.1944 9.08796 23.448 11.4051 23.3236 14.1736C23.6346 14.0532 23.9456 13.963 24.2566 13.9028C24.6297 13.7824 25.034 13.7222 25.4694 13.7222C27.2731 13.7222 28.6725 14.294 29.6676 15.4375C30.725 16.581 31.2536 18.0255 31.2536 19.7708C31.2536 21.5764 30.6939 23.081 29.5743 24.2847C28.4548 25.4282 26.8999 26 24.9096 26C23.0437 26 21.4888 25.338 20.2449 24.0139C19.001 22.6898 18.379 20.7338 18.379 18.1458C18.379 13.9931 18.9388 10.6227 20.0583 8.03472C21.1778 5.44675 22.7638 3.52083 24.8163 2.25694C26.8688 0.932867 29.2634 0.180553 32 0V3.61111ZM13.7143 3.61111C10.7911 4.09259 8.64529 5.29629 7.27697 7.22222C5.90865 9.08796 5.16229 11.4051 5.0379 14.1736C5.28669 14.0532 5.56657 13.963 5.87755 13.9028C6.25073 13.7824 6.655 13.7222 7.09038 13.7222C8.89407 13.7222 10.3246 14.294 11.3819 15.4375C12.4393 16.581 12.9679 18.0255 12.9679 19.7708C12.9679 21.5764 12.3771 23.081 11.1953 24.2847C10.0758 25.4282 8.55199 26 6.62391 26C4.69582 26 3.10982 25.338 1.86589 24.0139C0.621963 22.6898 0 20.7338 0 18.1458C0 13.9931 0.559767 10.6227 1.6793 8.03472C2.79883 5.44675 4.38484 3.52083 6.43732 2.25694C8.4898 0.932867 10.9155 0.180553 13.7143 0V3.61111Z"
                                fill="black" />
                        </svg>
                    </span>
                </div>
                <div class="text-sm text-gray-600 mt-6">Пользуюсь этой платформой уже несколько месяцев.
                     Она значительно улучшила мою продуктивность. Просто отличная!</div>
            </div>
        </div>
    </div>

    <!-- Feedback form -->
    <div class="max-w-7xl mx-auto flex mt-20 grid grid-cols-2 image-mask relative top-96">
        <div class="flex-row grid gap-y-4 p-16 mt-8">
            <div class="text-2xl font-bold leading-13 tracking-normal ">Форма </br><span
                    class="text-blue-700">обратной связи</span>
            </div>
            <div>Ваше удобное средство для выражения мнения, задания вопросов или предоставления отзывов. Мы готовы
                слушать васи стремимся улучшить наши услуги на основе ваших пожеланий
            </div>
            <div class="flex">
                <div class="flex gap-5">
                    <div class="flex gap-5">
                        <img src="/images/call.png" alt="call rasmi" class="h-5 relative top-0.5 left-1">
                        998 90 821 2776
                    </div>
                    <div class="flex gap-5">
                        <div class="">
                            <img src="/images/mail-01.png" alt="sms rasmi" class="h-5 relative top-0.5 left-2">
                        </div>
                        <h1 class="relative left-2">email: help@mercuryedu.uz</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-row px-16 py-5">
            <form class="flex flex-col justify-center">
                <div class="flex flex-col ">
                    <span class="relative top-3 left-4 font-bold">Ваше имя</span>
                    <input type="text" name="price" id="price" placeholder="John Doe"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
                <div class="flex flex-col mt-2">
                    <span class="relative top-3 left-4 font-bold">Email</span>
                    <input type="text" name="price" id="price" placeholder="info@mercuryedu.uz"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
                <div class="flex flex-col mt-2">
                    <span class="relative top-3 left-4 font-bold">Телефон</span>
                    <input type="text" name="price" id="price" placeholder="+99890 123 45 67"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
                <div class="flex flex-col mt-2">
                    <span class="relative top-3 left-4 font-bold">Какой у вас проект?</span>
                    <textarea type="text"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                    </textarea>
                </div>
                <button class="rounded-full gap-10 bg-blue-700 mt-5 p-4 text-white">Отправить</button>
            </form>
        </div>
    </div>

    <!-- FAQ -->
    <div class="max-w-7xl mx-auto relative top-96">
        <div class="text-center text-5xl font-bold leading-14 tracking-normal my-16">Остались <span class="text-blue-700">вопросы?</span></div>
        <div class="grid grid-cols-2 gap-4  text-base font-normal leading-6 tracking-normal text-left">
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">
                Сколько курсов одновременно можно запустить в Mercury?
                <img src="{{asset('/images/plus-sign.png')}}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно запустить в Mercury?
                <img src="{{asset('/images/plus-sign.png')}}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно запустить в Mercury?
                <img src="{{asset('/images/plus-sign.png')}}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно запустить в Mercury?
                <img src="{{asset('/images/plus-sign.png')}}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно запустить в Mercury?
                <img src="{{asset('/images/plus-sign.png')}}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно запустить в Mercury?
                <img src="{{asset('/images/plus-sign.png')}}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно запустить в Mercury?
                <img src="{{asset('/images/plus-sign.png')}}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно запустить в Mercury?
                <img src="{{asset('/images/plus-sign.png')}}" alt="">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-slate-950 mt-80 relative top-40 p-6">
        <div class="max-w-7xl mx-auto flex justify-between text-gray-600">
            <div>© 2023 OOO «Mercury Edu». Все права защищены</div>
            <div><img src="{{asset('/images/mask-2.png')}}" alt="logo"></div>
            <div class="flex">
                <div>Политика конфиденциальности</div>
                <div>Условия использования</div>
            </div>
        </div>
    </div>
</body>
</html>
