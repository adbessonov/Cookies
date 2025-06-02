<!--
Dev: Bessonov Andrey
Contact: adb@abessonov.ru
License: Свободное распространение с сохранением контактной информации
-->

<style>
#cookie-notice {
position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
  }
  #cookie-notice button {
    margin: 0 10px;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  #accept-cookies {
    background-color: #0198ff;
    color: white;
  }
  #save-cookie-settings {
    background-color: #0198ff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    margin: 0 10px;
    padding: 5px 10px;
  }
  #cookie-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 2000;
    justify-content: center;
    align-items: center;
  }
  .modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    width: 70%;
    max-width: 600px;
    max-height: 80vh;
    overflow-y: auto;
  }
  #cookie-icon {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #0198ff;
    color: white;
    padding: 10px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 1000;
  }
  .modal-content h2 {
    color: #000;
    font-size: 18px;
    margin-bottom: 10px;
  }
  .modal-content p {
    color: #333;
    font-size: 14px;
    margin-bottom: 15px;
  }
  .finzortech-analytics-block {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 15px;
  }
  .finzortech-analytics-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
  }
  .analytics-title {
    font-weight: bold;
  }
  .analytics-content {
    font-size: 12px;
  }
  .ui-switcher {
    display: inline-block;
    height: 20px;
    width: 40px;
    background: #898989;
    border-radius: 10px;
    cursor: pointer;
    position: relative;
  }
  .ui-switcher:after {
    content: '';
    height: 18px;
    width: 18px;
    background: #fff;
    border-radius: 50%;
    position: absolute;
    left: 1px;
    top: 1px;
    transition: 0.3s;
  }
  .ui-switcher.active {
    background: #4cd964;
}
  .ui-switcher.active:after {
    left: 21px;
  }
  @media (max-width: 768px) {
    .modal-content {
        width: 90%;
        margin: 10% auto;
    }
    #cookie-notice {
      flex-direction: column;
    }
    #cookie-notice button {
      margin: 5px 0;
      width: 100%;
    }
  }
</style>
<div id="cookie-notice">
  <p>Мы используем файлы Cookie для улучшения работы, персонализации и
    повышения удобства пользования нашим сайтом.</p>
  <button id="accept-cookies">ПРИНЯТЬ ВСЕ</button>
  <button id="reject-cookies">ОТКАЗАТЬСЯ ОТ ВСЕХ</button>
  <button id="cookie-settings">НАСТРОИТЬ</button>
</div>

<div id="cookie-modal">
  <div class="modal-content">
    <h2>Cookie-файлы</h2>
    <p>Cookie-файлы - это текстовая строка информации, которую веб-сервер
      передает в браузер Вашего устройства (компьютер, ноутбук, смартфон,
    планшет), и которая далее хранится там. Cookie-файлы создаются, когда вы
      используете ваш браузер, при посещении Сайта. При каждом новом посещении
      Сайта браузер отправляет cookie-файлы на Сайт, и он распознает
      пользовательское устройство, что позволяет оптимизировать навигацию по
      Сайту при каждом следующем посещении.</p>
    <p>При первом посещении Сайта Вы имеете возможность дать согласие на
      использование cookie-файлов или отказаться от него. Для отзыва ранее
      предоставленного согласия необходимо повторно открыть настройки Cookie
      через кнопку с иконкой «Печенье» в нижнем углу Сайта. При отказе от
      использования некоторых cookie-файлов определенный контент или функции
      Сайта могут быть недоступны или будут работать некорректно.</p>
    <h2>Настройка cookie-файлов</h2>
    <p>Детальная информация о целях обработки данных и поставщиках, которые мы
      используем на наших сайтах</p>
    <div class="finzortech-analytics-block">
      <div class="finzortech-analytics-header">
        <div class="analytics-title">Яндекс.Метрика</div>
        <span class="ui-switcher" data-type="analytic" data-switcher='{"id":"ym"}'></span>
      </div>
      <div class="analytics-content">
Этот сайт использует сервис веб-аналитики Яндекс.Метрика, предоставляемый компанией ООО «ЯНДЕКС», 119021, Россия, Москва, ул. Л. Толстого, 16 (далее — Яндекс).
        Сервис Яндекс.Метрика использует технологию «cookie» — небольшие текстовые файлы, размещаемые на компьютере пользователей с целью анализа их пользовательской активности.
Собранная при помощи cookie информация не может идентифицировать вас, однако может помочь нам улучшить работу нашего сайта. Информация об использовании вами данного сайта, собранная при помощи cookie, будет передаваться Яндексу и храниться на сервере Яндекса в ЕС и Российской Федерации. Яндекс будет обрабатывать эту информацию для оценки использования вами сайта, составления для нас отчетов о деятельности нашего сайта, и предоставления других услуг. Яндекс обрабатывает эту информацию в порядке, установленном в условиях использования сервиса Яндекс.Метрика.
Вы можете отказаться от использования cookies, выбрав соответствующие настройки в браузере. Также вы можете использовать инструмент. Однако это может повлиять на работу некоторых функций сайта. Используя этот сайт, вы соглашаетесь на обработку данных о вас Яндексом в порядке и целях, указанных выше.
      </div>
    </div>
    <div class="finzortech-analytics-block">
      <div class="finzortech-analytics-header">
        <div class="analytics-title">Пиксель ВКонтакте</div>
        <span class="ui-switcher" data-type="analytic" data-switcher='{"id":"vkp"}'></span>
      </div>
      <div class="analytics-content">
Пиксель ВКонтакте (vk.com) позволяет отслеживать посетителей со страницы сайта, на которой он установлен: как только человек заходит на страницу, пиксель ретаргетинга автоматически его учитывает.
С помощью пикселя мы показываем рекламу пользователям ВКонтакте, которые заходили на наш сайт или в мобильное приложение и совершили там определенные действия.
Пиксель принадлежит ООО «В Контакте», расположенного по адресу 191024, Санкт-Петербург, ул. Херсонская, д. 12-14, литер А, помещение 1-Н
</div>
    </div>
    <button id="save-cookie-settings">Сохранить настройки</button>
  </div>
</div>

<div id="cookie-icon">
    🍪
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cookieNotice = document.getElementById('cookie-notice');
    const cookieModal = document.getElementById('cookie-modal');
    const cookieIcon = document.getElementById('cookie-icon');

    const acceptAllBtn = document.getElementById('accept-cookies');
    const rejectAllBtn = document.getElementById('reject-cookies');
    const settingsBtn = document.getElementById('cookie-settings');
    const saveSettingsBtn = document.getElementById('save-cookie-settings');

    // Проверяем наличие сохраненного выбора
    const cookieConsent = localStorage.getItem('cookieConsent');

    if (cookieConsent) {
        // Если выбор уже сделан, показываем только иконку
        finzortech_hideCookieNotice();
        finzortech_showCookieIcon();
        finzortech_applySavedSettings();
    } else {
        // Если выбор еще не сделан, показываем уведомление
        cookieNotice.style.display = 'flex';
        finzortech_hideCookieIcon();
    }

    acceptAllBtn.addEventListener('click', () => {
        acceptAllCookies();
        finzortech_hideCookieNotice();
        finzortech_showCookieIcon();
    });

    rejectAllBtn.addEventListener('click', () => {
        rejectAllCookies();
        finzortech_hideCookieNotice();
        finzortech_showCookieIcon();
    });

    settingsBtn.addEventListener('click', () => {
        cookieModal.style.display = 'flex';
    });

    saveSettingsBtn.addEventListener('click', () => {
        finzortech_saveCookieSettings();
        cookieModal.style.display = 'none';
        finzortech_hideCookieNotice();
        finzortech_showCookieIcon();
    });

    cookieIcon.addEventListener('click', () => {
        cookieModal.style.display = 'flex';
    });

    window.onclick = function(event) {
        if (event.target == cookieModal) {
            cookieModal.style.display = 'none';
        }
    }

    document.querySelectorAll('.ui-switcher').forEach(switcher => {
        switcher.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });

    function acceptAllCookies() {
        localStorage.setItem('cookieConsent', 'accepted');
        enableAllCookies();
        updateSwitchers(true);
    }

    function rejectAllCookies() {
        localStorage.setItem('cookieConsent', 'rejected');
        disableAllCookies();
        updateSwitchers(false);
    }

    function finzortech_saveCookieSettings() {
        const settings = {
            ym: document.querySelector('[data-switcher=\'{"id":"ym"}\']').classList.contains('active'),
        vkp: document.querySelector('[data-switcher=\'{"id":"vkp"}\']').classList.contains('active')
      };
      localStorage.setItem('cookieSettings', JSON.stringify(settings));
      localStorage.setItem('cookieConsent', 'customized');
      finzortech_applyCookieSettings(settings);
    }

    function finzortech_applyCookieSettings(settings) {
        if (settings.ym) {
            enableYandexMetrika();
        } else {
            disableYandexMetrika();
        }
        if (settings.vkp) {
            enableVKPixel();
        } else {
            disableVKPixel();
        }
    }

    function enableAllCookies() {
        enableYandexMetrika();
        enableVKPixel();
    }

    function disableAllCookies() {
        disableYandexMetrika();
        disableVKPixel();
    }

    function enableYandexMetrika() {
        // Код для включения Яндекс.Метрики
        console.log('Яндекс.Метрика включена');
    }

    function disableYandexMetrika() {
        // Код для отключения Яндекс.Метрики
        console.log('Яндекс.Метрика отключена');
    }

    function enableVKPixel() {
        // Код для включения Пикселя ВКонтакте
        console.log('Пиксель ВКонтакте включен');
    }

    function disableVKPixel() {
        // Код для отключения Пикселя ВКонтакте
        console.log('Пиксель ВКонтакте отключен');
    }

    function finzortech_hideCookieNotice() {
        cookieNotice.style.display = 'none';
    }

    function finzortech_showCookieIcon() {
        cookieIcon.style.display = 'block';
    }

    function finzortech_hideCookieIcon() {
        cookieIcon.style.display = 'none';
    }

    function updateSwitchers(state) {
        document.querySelectorAll('.ui-switcher').forEach(switcher => {
            if (state) {
                switcher.classList.add('active');
            } else {
                switcher.classList.remove('active');
            }
        });
    }

    function finzortech_applySavedSettings() {
        const savedSettings = localStorage.getItem('cookieSettings');
        if (savedSettings) {
            finzortech_applyCookieSettings(JSON.parse(savedSettings));
            document.querySelectorAll('.ui-switcher').forEach(switcher => {
                const id = JSON.parse(switcher.dataset.switcher).id;
                if (JSON.parse(savedSettings)[id]) {
                    switcher.classList.add('active');
                } else {
                    switcher.classList.remove('active');
                }
            });
      } else if (cookieConsent === 'accepted') {
            enableAllCookies();
            updateSwitchers(true);
        } else if (cookieConsent === 'rejected') {
            disableAllCookies();
            updateSwitchers(false);
        }
    }

    // Применяем сохраненные настройки при загрузке страницы
    finzortech_setupEventListeners();
    finzortech_setupSwitchers();
    finzortech_applySavedSettings();
    finzortech_initCookieSettings();
  });

  function finzortech_setupEventListeners() {
    // Код для установки слушателей событий
  }

  function finzortech_setupSwitchers() {
    // Код для установки переключателей
  }

  function finzortech_initCookieSettings() {
    // Код для инициализации настроек cookie
  }
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

  ym(72266686, "init", {
    clickmap:true,
    trackLinks:true,
    accurateTrackBounce:true,
    webvisor:true
  });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/72266686" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script src="<?php echo get_bloginfo( 'template_directory' );?>/js/swiper-bundle.min.js" ></script>
<script src="<?php echo get_bloginfo( 'template_directory' );?>/js/main.js"></script>
