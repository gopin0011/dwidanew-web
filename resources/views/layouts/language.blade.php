<p style="margin: 20px 0 0 0;">
<b>{{ __('messages.footer.languages') }}</b>
</p>

<ul class="language-switcher">
    <li><a href="javascript: void(0);" onclick="javascript: setLang('in');" title="Indonesia"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/320px-Flag_of_Indonesia.svg.png"></a></li>
    <li><a href="javascript: void(0);" onclick="javascript: setLang('en');" title="English"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg/320px-Flag_of_the_United_Kingdom_%283-5%29.svg.png"></a></li>
</ul>

<script>
    function setCookie(name, value, expirationDays) {
        const date = new Date();
        date.setTime(date.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    function setLang(lang) 
    {
        setCookie('active_lang', lang, 365);
        window.location.reload();
    }
</script>