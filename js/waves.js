! function(t) {
    "use strict";

    function e(t) {
        return null !== t && t === t.window
    ***REMOVED***

    function n(t) {
        return e(t) ? t : 9 === t.nodeType && t.defaultView
    ***REMOVED***

    function a(t) {
        var e, a, i = {
                top: 0,
                left: 0
            ***REMOVED***,
            o = t && t.ownerDocument;
        return e = o.documentElement, "undefined" != typeof t.getBoundingClientRect && (i = t.getBoundingClientRect()), a = n(o), {
            top: i.top + a.pageYOffset - e.clientTop,
            left: i.left + a.pageXOffset - e.clientLeft
        ***REMOVED***
    ***REMOVED***

    function i(t) {
        var e = "";
        for (var n in t) t.hasOwnProperty(n) && (e += n + ":" + t[n] + ";");
        return e
    ***REMOVED***

    function o(t) {
        if (d.allowEvent(t) === !1) return null;
        for (var e = null, n = t.target || t.srcElement; null !== n.parentElement;) {
            if (!(n instanceof SVGElement || -1 === n.className.indexOf("waves-effect"))) {
                e = n;
                break
            ***REMOVED***
            if (n.classList.contains("waves-effect")) {
                e = n;
                break
            ***REMOVED***
            n = n.parentElement
        ***REMOVED***
        return e
    ***REMOVED***

    function r(e) {
        var n = o(e);
        null !== n && (c.show(e, n), "ontouchstart" in t && (n.addEventListener("touchend", c.hide, !1), n.addEventListener("touchcancel", c.hide, !1)), n.addEventListener("mouseup", c.hide, !1), n.addEventListener("mouseleave", c.hide, !1))
    ***REMOVED***
    var s = s || {***REMOVED***,
        u = document.querySelectorAll.bind(document),
        c = {
            duration: 750,
            show: function(t, e) {
                if (2 === t.button) return !1;
                var n = e || this,
                    o = document.createElement("div");
                o.className = "waves-ripple", n.appendChild(o);
                var r = a(n),
                    s = t.pageY - r.top,
                    u = t.pageX - r.left,
                    d = "scale(" + n.clientWidth / 100 * 10 + ")";
                "touches" in t && (s = t.touches[0].pageY - r.top, u = t.touches[0].pageX - r.left), o.setAttribute("data-hold", Date.now()), o.setAttribute("data-scale", d), o.setAttribute("data-x", u), o.setAttribute("data-y", s);
                var l = {
                    top: s + "px",
                    left: u + "px"
                ***REMOVED***;
                o.className = o.className + " waves-notransition", o.setAttribute("style", i(l)), o.className = o.className.replace("waves-notransition", ""), l["-webkit-transform"] = d, l["-moz-transform"] = d, l["-ms-transform"] = d, l["-o-transform"] = d, l.transform = d, l.opacity = "1", l["-webkit-transition-duration"] = c.duration + "ms", l["-moz-transition-duration"] = c.duration + "ms", l["-o-transition-duration"] = c.duration + "ms", l["transition-duration"] = c.duration + "ms", l["-webkit-transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", l["-moz-transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", l["-o-transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", l["transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", o.setAttribute("style", i(l))
            ***REMOVED***,
            hide: function(t) {
                d.touchup(t);
                var e = this,
                    n = (1.4 * e.clientWidth, null),
                    a = e.getElementsByClassName("waves-ripple");
                if (!(a.length > 0)) return !1;
                n = a[a.length - 1];
                var o = n.getAttribute("data-x"),
                    r = n.getAttribute("data-y"),
                    s = n.getAttribute("data-scale"),
                    u = Date.now() - Number(n.getAttribute("data-hold")),
                    l = 350 - u;
                0 > l && (l = 0), setTimeout(function() {
                    var t = {
                        top: r + "px",
                        left: o + "px",
                        opacity: "0",
                        "-webkit-transition-duration": c.duration + "ms",
                        "-moz-transition-duration": c.duration + "ms",
                        "-o-transition-duration": c.duration + "ms",
                        "transition-duration": c.duration + "ms",
                        "-webkit-transform": s,
                        "-moz-transform": s,
                        "-ms-transform": s,
                        "-o-transform": s,
                        transform: s
                    ***REMOVED***;
                    n.setAttribute("style", i(t)), setTimeout(function() {
                        try {
                            e.removeChild(n)
                        ***REMOVED*** catch (t) {
                            return !1
                        ***REMOVED***
                    ***REMOVED***, c.duration)
                ***REMOVED***, l)
            ***REMOVED***,
            wrapInput: function(t) {
                for (var e = 0; e < t.length; e++) {
                    var n = t[e];
                    if ("input" === n.tagName.toLowerCase()) {
                        var a = n.parentNode;
                        if ("i" === a.tagName.toLowerCase() && -1 !== a.className.indexOf("waves-effect")) continue;
                        var i = document.createElement("i");
                        i.className = n.className + " waves-input-wrapper";
                        var o = n.getAttribute("style");
                        o || (o = ""), i.setAttribute("style", o), n.className = "waves-button-input", n.removeAttribute("style"), a.replaceChild(i, n), i.appendChild(n)
                    ***REMOVED***
                ***REMOVED***
            ***REMOVED***
        ***REMOVED***,
        d = {
            touches: 0,
            allowEvent: function(t) {
                var e = !0;
                return "touchstart" === t.type ? d.touches += 1 : "touchend" === t.type || "touchcancel" === t.type ? setTimeout(function() {
                    d.touches > 0 && (d.touches -= 1)
                ***REMOVED***, 500) : "mousedown" === t.type && d.touches > 0 && (e = !1), e
            ***REMOVED***,
            touchup: function(t) {
                d.allowEvent(t)
            ***REMOVED***
        ***REMOVED***;
    s.displayEffect = function(e) {
        e = e || {***REMOVED***, "duration" in e && (c.duration = e.duration), c.wrapInput(u(".waves-effect")), "ontouchstart" in t && document.body.addEventListener("touchstart", r, !1), document.body.addEventListener("mousedown", r, !1)
    ***REMOVED***, s.attach = function(e) {
        "input" === e.tagName.toLowerCase() && (c.wrapInput([e]), e = e.parentElement), "ontouchstart" in t && e.addEventListener("touchstart", r, !1), e.addEventListener("mousedown", r, !1)
    ***REMOVED***, t.Waves = s, document.addEventListener("DOMContentLoaded", function() {
        s.displayEffect()
    ***REMOVED***, !1)
***REMOVED***(window);
