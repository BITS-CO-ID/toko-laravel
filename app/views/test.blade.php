<div id="settings_page">
    <div data-bind="template: 'settingsTemplate'" id="content">
        <h2 data-bind="text: $root.settingsTitle">Social Connect</h2>
        <div class="col-sm-2 social-buttons">
            <a class="btn btn-block btn-social btn-facebook" href="{{ route('fb') }}">
                <i class="fa fa-facebook"></i> Connect Facebook
            </a>
            <a class="btn btn-block btn-social btn-twitter" href="{{ route('twitter') }}">
                <i class="fa fa-twitter"></i> Connect Twitter
            </a>
            <a class="btn btn-block btn-social btn-google-plus">
                <i class="fa fa-google-plus"></i> Connect Google
            </a>
            </a>
        </div>
    </div>
</div>
<div id="twitter-feed"></div>
<!--<div class="row">
    <div class="col-sm-4 social-buttons">
        <h3>The Buttons</h3>
        <a class="btn btn-block btn-social btn-bitbucket">
            <i class="fa fa-bitbucket"></i> Sign in with Bitbucket
        </a>
        <a class="btn btn-block btn-social btn-dropbox">
            <i class="fa fa-dropbox"></i> Sign in with Dropbox
        </a>
        <a class="btn btn-block btn-social btn-facebook">
            <i class="fa fa-facebook"></i> Sign in with Facebook
        </a>
        <a class="btn btn-block btn-social btn-flickr">
            <i class="fa fa-flickr"></i> Sign in with Flickr
        </a>
        <a class="btn btn-block btn-social btn-github">
            <i class="fa fa-github"></i> Sign in with GitHub
        </a>
        <a class="btn btn-block btn-social btn-google-plus">
            <i class="fa fa-google-plus"></i> Sign in with Google
        </a>
        <a class="btn btn-block btn-social btn-instagram">
            <i class="fa fa-instagram"></i> Sign in with Instagram
        </a>
        <a class="btn btn-block btn-social btn-linkedin">
            <i class="fa fa-linkedin"></i> Sign in with LinkedIn
        </a>
        <a class="btn btn-block btn-social btn-pinterest">
            <i class="fa fa-pinterest"></i> Sign in with Pinterest
        </a>
        <a class="btn btn-block btn-social btn-tumblr">
            <i class="fa fa-tumblr"></i> Sign in with Tumblr
        </a>
        <a class="btn btn-block btn-social btn-twitter">
            <i class="fa fa-twitter"></i> Sign in with Twitter
        </a>
        <a class="btn btn-block btn-social btn-vk">
            <i class="fa fa-vk"></i> Sign in with VK
        </a>

        <hr>

        <div class="text-center">
            <a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
            <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
            <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
            <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
            <a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
            <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
            <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
            <a class="btn btn-social-icon btn-pinterest"><i class="fa fa-pinterest"></i></a>
            <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
            <a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
        </div>
    </div>
</div>-->