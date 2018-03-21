<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">
            <div class="md-card">
                <div class="md-card-content">
                    <h2 class="heading_a uk-margin-bottom">A compact, cross-browser solution for the JavaScript Notifications API</h2>
                    <p><a href="#" class="md-btn md-btn-primary" id="pushDemo">Demo</a></p>
<pre class="line-numbers"><code class="language-javascript">Push.create("Hello world!", {
    body: "How's it hangin'?",
    icon: 'icon.png',
    timeout: 4000,
    onClick: function () {
        window.focus();
        this.close();
    }
});</code></pre>
                </div>
            </div>
        </div>
    </div>