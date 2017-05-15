<div class="container">
    <hr>
    <footer>
        <p class="pull-right"><a href="#">{{ t('Back to top') }}</a></p>
        <p>&copy; {{ siteSettings('siteName') }} - {{ date("Y") }}&nbsp;&middot;&nbsp;
            <a href="{{ route('privacy') }}">{{ t('Privacy Policy') }}</a>&nbsp;&middot;&nbsp;
            <a href="{{ route('tos') }}">{{ t('Terms') }}</a>&nbsp;&middot;&nbsp;
            <a href="{{ route('faq') }}">{{ t('FAQ') }}</a>&nbsp;&middot;&nbsp;
            <a href="{{ route('about') }}">{{ t('About Us') }}</a>
            @include('master/language')
        </p>
    </footer>
</div>