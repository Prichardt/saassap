// (function(w, d) {
//     function r() {
//         var s = document.createElement('script');
//         s.async = 1;
//         s.type = 'text/javascript';
//         s.src = 'https://chatflow.io/static/1.2/chatflow.php';
//         (d.body || d.head).appendChild(s);
//         s.onload = function() {
//             var options = { "channels": { "whatsapp": "27671170017" }, "agentname": "Charles", "color": "#A3CB38", "position": "left", "ctaText": "Have any questions?", "headerText": "Chat with me" }
//             cffunc = new chatflow();
//             cffunc.loadcf('init', options);
//         };
//     }
//     if (w.attachEvent) { w.attachEvent('onload', r) } else { w.addEventListener('load', r, false) }
// })(window, document);



window.callbellSettings = {
    token: "PnsEFEJKsdmKur5Gq4BNLSuZ"
};

(function() {
    var w = window;
    var ic = w.callbell;
    if (typeof ic === "function") {
        ic('reattach_activator');
        ic('update', callbellSettings);
    } else {
        var d = document;
        var i = function() { i.c(arguments) };
        i.q = [];
        i.c = function(args) { i.q.push(args) };
        w.Callbell = i;
        var l = function() {
            var s = d.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'https://dash.callbell.eu/include/' + window.callbellSettings.token + '.js';
            var x = d.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        };
        if (w.attachEvent) { w.attachEvent('onload', l); } else { w.addEventListener('load', l, false); }
    }
})()