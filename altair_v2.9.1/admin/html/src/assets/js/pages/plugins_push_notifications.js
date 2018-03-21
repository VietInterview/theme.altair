/*
*  altair admin
*  @version v2.9.1
*  @author tzd
*  @license http://themeforest.net/licenses
*  plugins_push_notifications.js - plugins_push_notifications.html
*/

$(function() {
    altair_push_notifications.init();
});

altair_push_notifications  = {
    init: function() {

        $('#pushDemo').on('click',function(e){
            e.preventDefault();
            Push.create("Hello!", {
                body: "How's it hangin'?",
                icon: 'assets/img/avatars/avatar_11@2x.png',
                timeout: 10000,
                onClick: function () {
                    window.focus();
                    this.close();
                }
            });
        })

    }
};