<?php defined('safe_access') or die('Restricted access!'); ?>

<div id="page_content">
    <div id="page_content_inner">

        <h3 class="heading_b uk-margin-bottom">
            Idle timeout
            <span class="sub-heading">A dead simple jQuery plugin that executes a callback function if the user is idle.</span>
        </h3>

        <div class="uk-alert uk-alert-info">
            <strong>Keep your mouse and keyboard still!</strong><br>
            This plugin will display a modal to the user after 5 seconds of idleness.
        </div>

        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h3 class="heading_a">Usage</h3>
<pre class="line-numbers"><code class="language-javascript">// append modal to &lt;body&gt;
$body.append('&lt;div class=&quot;uk-modal&quot; id=&quot;modal_idle&quot;&gt;' +
    '&lt;div class=&quot;uk-modal-dialog&quot;&gt;' +
        '&lt;div class=&quot;uk-modal-header&quot;&gt;' +
            '&lt;h3 class=&quot;uk-modal-title&quot;&gt;Your session is about to expire!&lt;/h3&gt;' +
        '&lt;/div&gt;' +
        '&lt;p&gt;You\'ve been inactive for a while. For your security, we\'ll log you out automatically.&lt;/p&gt;' +
        '&lt;p&gt;Click &quot;Stay Online&quot; to continue your session.&lt;/p&gt;' +
        '&lt;p&gt;Your session will expire in &lt;span class=&quot;uk-text-bold md-color-red-500&quot; id=&quot;sessionSecondsRemaining&quot;&gt;&lt;/span&gt; seconds.&lt;/p&gt;' +
        '&lt;div class=&quot;uk-modal-footer uk-text-right&quot;&gt;' +
            '&lt;button id=&quot;staySigned&quot; type=&quot;button&quot; class=&quot;md-btn md-btn-flat uk-modal-close&quot;&gt;Stay Online&lt;/button&gt;&lt;button type=&quot;button&quot; class=&quot;md-btn md-btn-flat md-btn-flat-primary&quot; id=&quot;logoutSession&quot;&gt;Logout&lt;/button&gt;' +
        '&lt;/div&gt;' +
    '&lt;/div&gt;' +
'&lt;/div&gt;');

var modal = UIkit.modal(&quot;#modal_idle&quot;, {
        bgclose: false
    }),
    session = {
        //Logout Settings
        inactiveTimeout: 5000,      //(ms) The time until we display a warning message
        warningTimeout: 30000,      //(ms) The time until we log them out
        minWarning: 5000,           //(ms) If they come back to page (on mobile), The minumum amount, before we just log them out
        warningStart: null,         //Date time the warning was started
        warningTimer: null,         //Timer running every second to countdown to logout
        autologout: {
            logouturl: &quot;login.html&quot;
        },
        logout: function () {       //Logout function once warningTimeout has expired
            window.location = session.autologout.logouturl;
        }
    },
    $sessionCounter = $('#sessionSecondsRemaining').html(session.warningTimeout/1000);

$(document).on(&quot;idle.idleTimer&quot;, function (event, elem, obj) {
    //Get time when user was last active
    var diff = (+new Date()) - obj.lastActive - obj.timeout,
        warning = (+new Date()) - diff;

    //On mobile js is paused, so see if this was triggered while we were sleeping
    if (diff &gt;= session.warningTimeout || warning &lt;= session.minWarning) {
        modal.hide();
    } else {
        //Show dialog, and note the time
        $sessionCounter.html(Math.round((session.warningTimeout - diff) / 1000));
        modal.show();
        session.warningStart = (+new Date()) - diff;

        //Update counter downer every second
        session.warningTimer = setInterval(function () {
            var remaining = Math.round((session.warningTimeout / 1000) - (((+new Date()) - session.warningStart) / 1000));
            if (remaining &gt;= 0) {
                $sessionCounter.html(remaining);
            } else {
                session.logout();
            }
        }, 1000)
    }
});

$body
    //User clicked ok to stay online
    .on('click','#staySigned', function () {
        clearTimeout(session.warningTimer);
        modal.hide();
    })
    //User clicked logout
    .on('click','#logoutSession', function () {
        session.logout();
    });

//Set up the timer, if inactive for 5 seconds log them out
$(document).idleTimer(session.inactiveTimeout);</code></pre>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>