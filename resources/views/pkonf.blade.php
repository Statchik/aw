<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
 
<header class="p-3 bg-light text-white mb-5" >
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="{{route('home')}}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="../public/photo/logo/logo.png" width="125">
                </a>

                <ul class="nav col-12 col-lg-auto mx-auto mb-2 justify-content-center mb-md-0">
                    <li><a class="nav-link px-2 text-secondary">+7 (3812) 90-62-03</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Записаться на сервис</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Заказать звонок</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Наши услуги</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Блог</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Отзывы</a></li>
                    <li><a href="filials" class="nav-link px-2 text-dark">Филиалы</a></li>
                </ul>

                <form class="col-12 col-lg-auto mx-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control" placeholder="Поисковая система..."aria-label="Search">
                </form>

                <div class="text-end">
                    @guest
                        @if (Route::has('login'))
                            <a class="btn btn-outline-dark me-2" href="{{ route('login') }}">{{ __('Вход') }}</a>
                        @endif

                        @if (Route::has('register'))
                            
                        @endif
                    @else
                        <a class="btn btn-outline-dark me-2" href="{{ route('lcb') }}">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="btn btn-outline-dark me-2" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </header> 
    
    <a class="form-group mx-5 mt-5 text-decoration-none btn btn-dark my-3" href="{{route('lcb')}}">   Назад  </a>

    <!-- <form>
  <div class="form-group mx-5 mt-5">
    <label for="exampleInput">Имя</label>
    <input type="name" class="form-control" id="name" value= {{Auth::user()->name}} >
  
  </div>
  <div class="form-group mx-5">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" value= {{Auth::user()->email}}><b>{{Auth::user()->id}};</b> 
    <small id="emailHelp" class="form-text text-muted">Помните что данные можно менять не чаще чем раз в 30 дней    .</small>
  </div>
  <div class="form-check mx-5 ">
    <input type="checkbox" class="form-check-input" id="exampleCheck1"> 
     <label class="form-check-label" for="exampleCheck1">Check me out</label> 
  </div>
  <button type="submit" class="btn btn-primary mx-5">Отправить </button>

</form> -->

    <!-- <form action="">
        <input type="text" value={{ Auth::user()->name }}>
        <input type="text" value={{ Auth::user()->email }}>
    </form> -->
   
</body>
<div class="ttx  mx-5 container">
<p class="text-center">
  <hr> <h2 clas>Политика в отношении обработки персональных данных</h2> <hr>
<b class="text-warning" > 1. Общие положения:</b>
<br>
Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. № 152-ФЗ «О персональных данных» (далее — Закон о персональных данных) и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных, предпринимаемые Михайловым Иваном Сергеевичем (далее — Оператор).
<br>1.1. Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.
<br> 1.2. Настоящая политика Оператора в отношении обработки персональных данных (далее — Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта httpsː//thismywebsite·com. <br>
<br><b class="text-warning"> 2.  Основные понятия, используемые в Политике </b><br>
2.1. Автоматизированная обработка персональных данных — обработка персональных данных с помощью средств вычислительной техники.
<br>2.2. Блокирование персональных данных — временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных).
<br>2.3. Веб-сайт — совокупность графических и информационных материалов, а также программ для ЭВМ и баз данных, обеспечивающих их доступность в сети интернет по сетевому адресу httpsː//thismywebsite·com.
<br>2.4. Информационная система персональных данных — совокупность содержащихся в базах данных персональных данных и обеспечивающих их обработку информационных технологий и технических средств.
<br>2.5. Обезличивание персональных данных — действия, в результате которых невозможно определить без использования дополнительной информации принадлежность персональных данных конкретному Пользователю или иному субъекту персональных данных.
<br>2.6. Обработка персональных данных — любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.
<br>2.7. Оператор — государственный орган, муниципальный орган, юридическое или физическое лицо, самостоятельно или совместно с другими лицами организующие и/или осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.
<br>2.8. Персональные данные — любая информация, относящаяся прямо или косвенно к определенному или определяемому Пользователю веб-сайта httpsː//thismywebsite·com.
<br>2.9. Персональные данные, разрешенные субъектом персональных данных для распространения, — персональные данные, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных путем дачи согласия на обработку персональных данных, разрешенных субъектом персональных данных для распространения в порядке, предусмотренном Законом о персональных данных (далее — персональные данные, разрешенные для распространения).
<br>2.10. Пользователь — любой посетитель веб-сайта httpsː//thismywebsite·com.
<br>2.11. Предоставление персональных данных — действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц.
<br>2.12. Распространение персональных данных — любые действия, направленные на раскрытие персональных данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с персональными данными неограниченного круга лиц, в том числе обнародование персональных данных в средствах массовой информации, размещение в информационно-телекоммуникационных сетях или предоставление доступа к персональным данным каким-либо иным способом.
<br>2.13. Трансграничная передача персональных данных — передача персональных данных на территорию иностранного государства органу власти иностранного государства, иностранному физическому или иностранному юридическому лицу.
<br>2.14. Уничтожение персональных данных — любые действия, в результате которых персональные данные уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания персональных данных в информационной системе персональных данных и/или уничтожаются материальные носители персональных данных. <br>
<br><b class="text-warning"> 3. Основные права и обязанности Оператора </b><br>
3.1. Оператор имеет право :
— получать от субъекта персональных данных достоверные информацию и/или документы, содержащие персональные данные;
— в случае отзыва субъектом персональных данных согласия на обработку персональных данных, а также, направления обращения с требованием о прекращении обработки персональных данных, Оператор вправе продолжить обработку персональных данных без согласия субъекта персональных данных при наличии оснований, указанных в Законе о персональных данных;
— самостоятельно определять состав и перечень мер, необходимых и достаточных для обеспечения выполнения обязанностей, предусмотренных Законом о персональных данных и принятыми в соответствии с ним нормативными правовыми актами, если иное не предусмотрено Законом о персональных данных или другими федеральными законами.
<br>3.2. Оператор обязан:
— предоставлять субъекту персональных данных по его просьбе информацию, касающуюся обработки его персональных данных;
— организовывать обработку персональных данных в порядке, установленном действующим законодательством РФ;
— отвечать на обращения и запросы субъектов персональных данных и их законных представителей в соответствии с требованиями Закона о персональных данных;
— сообщать в уполномоченный орган по защите прав субъектов персональных данных по запросу этого органа необходимую информацию в течение 10 дней с даты получения такого запроса;
— публиковать или иным образом обеспечивать неограниченный доступ к настоящей Политике в отношении обработки персональных данных;
— принимать правовые, организационные и технические меры для защиты персональных данных от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, предоставления, распространения персональных данных, а также от иных неправомерных действий в отношении персональных данных;
— прекратить передачу (распространение, предоставление, доступ) персональных данных, прекратить обработку и уничтожить персональные данные в порядке и случаях, предусмотренных Законом о персональных данных;
— исполнять иные обязанности, предусмотренные Законом о персональных данных.<br>
<br><b class="text-warning"> 4. Основные права и обязанности субъектов персональных данных </b><br>
4.1. Субъекты персональных данных имеют право:
— получать информацию, касающуюся обработки его персональных данных, за исключением случаев, предусмотренных федеральными законами. Сведения предоставляются субъекту персональных данных Оператором в доступной форме, и в них не должны содержаться персональные данные, относящиеся к другим субъектам персональных данных, за исключением случаев, когда имеются законные основания для раскрытия таких персональных данных. Перечень информации и порядок ее получения установлен Законом о персональных данных;
— требовать от оператора уточнения его персональных данных, их блокирования или уничтожения в случае, если персональные данные являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также принимать предусмотренные законом меры по защите своих прав;
— выдвигать условие предварительного согласия при обработке персональных данных в целях продвижения на рынке товаров, работ и услуг;
— на отзыв согласия на обработку персональных данных, а также, на направление требования о прекращении обработки персональных данных;
— обжаловать в уполномоченный орган по защите прав субъектов персональных данных или в судебном порядке неправомерные действия или бездействие Оператора при обработке его персональных данных;
— на осуществление иных прав, предусмотренных законодательством РФ.
<br>4.2. Субъекты персональных данных обязаны:
— предоставлять Оператору достоверные данные о себе;
— сообщать Оператору об уточнении (обновлении, изменении) своих персональных данных.
<br>4.3. Лица, передавшие Оператору недостоверные сведения о себе, либо сведения о другом субъекте персональных данных без согласия последнего, несут ответственность в соответствии с законодательством РФ.<br>
<br><b class="text-warning"> 5. Принципы обработки персональных данных :   </b> <br>
5.1. Обработка персональных данных осуществляется на законной и справедливой основе.
<br>5.2. Обработка персональных данных ограничивается достижением конкретных, заранее определенных и законных целей. Не допускается обработка персональных данных, несовместимая с целями сбора персональных данных.
<br>5.3. Не допускается объединение баз данных, содержащих персональные данные, обработка которых осуществляется в целях, несовместимых между собой.
<br>5.4. Обработке подлежат только персональные данные, которые отвечают целям их обработки.
<br>5.5. Содержание и объем обрабатываемых персональных данных соответствуют заявленным целям обработки. Не допускается избыточность обрабатываемых персональных данных по отношению к заявленным целям их обработки.
<br>5.6. При обработке персональных данных обеспечивается точность персональных данных, их достаточность, а в необходимых случаях и актуальность по отношению к целям обработки персональных данных. Оператор принимает необходимые меры и/или обеспечивает их принятие по удалению или уточнению неполных или неточных данных.
<br>5.7. Хранение персональных данных осуществляется в форме, позволяющей определить субъекта персональных данных, не дольше, чем этого требуют цели обработки персональных данных, если срок хранения персональных данных не установлен федеральным законом, договором, стороной которого, выгодоприобретателем или поручителем по которому является субъект персональных данных. Обрабатываемые персональные данные уничтожаются либо обезличиваются по достижении целей обработки или в случае утраты необходимости в достижении этих целей, если иное не предусмотрено федеральным законом.<br>
<br><b class="text-warning"> 6. Цели обработки персональных данных </b> <br>
Цель обработки	информирование Пользователя посредством отправки электронных писем
Персональные данные	
философские убеждения
Правовые основания	
Федеральный закон «Об информации, информационных технологиях и о защите информации» от 27.07.2006 N 149-ФЗ
Виды обработки персональных данных	
Передача персональных данных<br>
<br><b class="text-warning"> 7. Условия обработки персональных данных : </b><br>
7.1. Обработка персональных данных осуществляется с согласия субъекта персональных данных на обработку его персональных данных.
<br>7.2. Обработка персональных данных необходима для достижения целей, предусмотренных международным договором Российской Федерации или законом, для осуществления возложенных законодательством Российской Федерации на оператора функций, полномочий и обязанностей.
<br>7.3. Обработка персональных данных необходима для осуществления правосудия, исполнения судебного акта, акта другого органа или должностного лица, подлежащих исполнению в соответствии с законодательством Российской Федерации об исполнительном производстве.
<br>7.4. Обработка персональных данных необходима для исполнения договора, стороной которого либо выгодоприобретателем или поручителем по которому является субъект персональных данных, а также для заключения договора по инициативе субъекта персональных данных или договора, по которому субъект персональных данных будет являться выгодоприобретателем или поручителем.
<br>7.5. Обработка персональных данных необходима для осуществления прав и законных интересов оператора или третьих лиц либо для достижения общественно значимых целей при условии, что при этом не нарушаются права и свободы субъекта персональных данных.
<br>7.6. Осуществляется обработка персональных данных, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных либо по его просьбе (далее — общедоступные персональные данные).
<br>7.7. Осуществляется обработка персональных данных, подлежащих опубликованию или обязательному раскрытию в соответствии с федеральным законом.<br>
<br><b class="text-warning"> 8. Порядок сбора, хранения, передачи и других видов обработки персональных данных </b> <br>
Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем реализации правовых, организационных и технических мер, необходимых для выполнения в полном объеме требований действующего законодательства в области защиты персональных данных.
<br>8.1. Оператор обеспечивает сохранность персональных данных и принимает все возможные меры, исключающие доступ к персональным данным неуполномоченных лиц.
<br>8.2. Персональные данные Пользователя никогда, ни при каких условиях не будут переданы третьим лицам, за исключением случаев, связанных с исполнением действующего законодательства либо в случае, если субъектом персональных данных дано согласие Оператору на передачу данных третьему лицу для исполнения обязательств по гражданско-правовому договору.
<br>8.3. В случае выявления неточностей в персональных данных, Пользователь может актуализировать их самостоятельно, путем направления Оператору уведомление на адрес электронной почты Оператора privacy@thismywebsite·com с пометкой «Актуализация персональных данных».
<br>8.4. Срок обработки персональных данных определяется достижением целей, для которых были собраны персональные данные, если иной срок не предусмотрен договором или действующим законодательством.
Пользователь может в любой момент отозвать свое согласие на обработку персональных данных, направив Оператору уведомление посредством электронной почты на электронный адрес Оператора privacy@thismywebsite·com с пометкой «Отзыв согласия на обработку персональных данных».
<br>8.5. Вся информация, которая собирается сторонними сервисами, в том числе платежными системами, средствами связи и другими поставщиками услуг, хранится и обрабатывается указанными лицами (Операторами) в соответствии с их Пользовательским соглашением и Политикой конфиденциальности. Субъект персональных данных и/или с указанными документами. Оператор не несет ответственность за действия третьих лиц, в том числе указанных в настоящем пункте поставщиков услуг.
<br>8.6. Установленные субъектом персональных данных запреты на передачу (кроме предоставления доступа), а также на обработку или условия обработки (кроме получения доступа) персональных данных, разрешенных для распространения, не действуют в случаях обработки персональных данных в государственных, общественных и иных публичных интересах, определенных законодательством РФ.
<br>8.7. Оператор при обработке персональных данных обеспечивает конфиденциальность персональных данных.
<br>8.8. Оператор осуществляет хранение персональных данных в форме, позволяющей определить субъекта персональных данных, не дольше, чем этого требуют цели обработки персональных данных, если срок хранения персональных данных не установлен федеральным законом, договором, стороной которого, выгодоприобретателем или поручителем по которому является субъект персональных данных.
<br>8.9. Условием прекращения обработки персональных данных может являться достижение целей обработки персональных данных, истечение срока действия согласия субъекта персональных данных, отзыв согласия субъектом персональных данных или требование о прекращении обработки персональных данных, а также выявление неправомерной обработки персональных данных.<br>
<br><b class="text-warning"> 9. Перечень действий, производимых Оператором с полученными персональными данными </b> <br>
9.1. Оператор осуществляет сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление и уничтожение персональных данных.
<br>9.2. Оператор осуществляет автоматизированную обработку персональных данных с получением и/или передачей полученной информации по информационно-телекоммуникационным сетям или без таковой.<br>
<br><b class="text-warning"> 10. Трансграничная передача персональных данных </b> <br>
10.1. Оператор до начала осуществления деятельности по трансграничной передаче персональных данных обязан уведомить уполномоченный орган по защите прав субъектов персональных данных о своем намерении осуществлять трансграничную передачу персональных данных (такое уведомление направляется отдельно от уведомления о намерении осуществлять обработку персональных данных).
<br>10.2. Оператор до подачи вышеуказанного уведомления, обязан получить от органов власти иностранного государства, иностранных физических лиц, иностранных юридических лиц, которым планируется трансграничная передача персональных данных, соответствующие сведения. <br>
<br><b class="text-warning"> 11. Конфиденциальность персональных данных </b> <br>
Оператор и иные лица, получившие доступ к персональным данным, обязаны не раскрывать третьим лицам и не распространять персональные данные без согласия субъекта персональных данных, если иное не предусмотрено федеральным законом.<br>
<br><b class="text-warning"> 12. Заключительные положения </b> <br>
12.1. Пользователь может получить любые разъяснения по интересующим вопросам, касающимся обработки его персональных данных, обратившись к Оператору с помощью электронной почты privacy@thismywebsite·com.
<br>12.2. В данном документе будут отражены любые изменения политики обработки персональных данных Оператором. Политика действует бессрочно до замены ее новой версией.
<br>12.3. Актуальная версия Политики в свободном доступе расположена в сети Интернет по адресу httpsː//thismywebsite·com/privacy/.</p>
</div>
<style>
    .ttx{
        font-family:system-ui;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
<script>

</script>
</html>
