/* Modernizr 2.7.1 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-csstransitions-shiv-cssclasses-prefixed-testprop-testallprops-domprefixes-load
 */
;
window.Modernizr = function (a, b, c) {
    function x(a) {
        j.cssText = a
    }

    function y(a, b) {
        return x(prefixes.join(a + ";") + (b || ""))
    }

    function z(a, b) {
        return typeof a === b
    }

    function A(a, b) {
        return !!~("" + a).indexOf(b)
    }

    function B(a, b) {
        for (var d in a) {
            var e = a[d];
            if (!A(e, "-") && j[e] !== c)
                return b == "pfx" ? e : !0
        }
        return !1
    }

    function C(a, b, d) {
        for (var e in a) {
            var f = b[a[e]];
            if (f !== c)
                return d === !1 ? a[e] : z(f, "function") ? f.bind(d || b) : f
        }
        return !1
    }

    function D(a, b, c) {
        var d = a.charAt(0).toUpperCase() + a.slice(1),
                e = (a + " " + n.join(d + " ") + d).split(" ");
        return z(b, "string") || z(b, "undefined") ? B(e, b) : (e = (a + " " + o.join(d + " ") + d).split(" "), C(e, b, c))
    }
    var d = "2.7.1",
            e = {},
            f = !0,
            g = b.documentElement,
            h = "modernizr",
            i = b.createElement(h),
            j = i.style,
            k, l = {}.toString,
            m = "Webkit Moz O ms",
            n = m.split(" "),
            o = m.toLowerCase().split(" "),
            p = {},
            q = {},
            r = {},
            s = [],
            t = s.slice,
            u, v = {}.hasOwnProperty,
            w;
    !z(v, "undefined") && !z(v.call, "undefined") ? w = function (a, b) {
        return v.call(a, b)
    } : w = function (a, b) {
        return b in a && z(a.constructor.prototype[b], "undefined")
    }, Function.prototype.bind || (Function.prototype.bind = function (b) {
        var c = this;
        if (typeof c != "function")
            throw new TypeError;
        var d = t.call(arguments, 1),
                e = function () {
                    if (this instanceof e) {
                        var a = function () {};
                        a.prototype = c.prototype;
                        var f = new a,
                                g = c.apply(f, d.concat(t.call(arguments)));
                        return Object(g) === g ? g : f
                    }
                    return c.apply(b, d.concat(t.call(arguments)))
                };
        return e
    }), p.csstransitions = function () {
        return D("transition")
    };
    for (var E in p)
        w(p, E) && (u = E.toLowerCase(), e[u] = p[E](), s.push((e[u] ? "" : "no-") + u));
    return e.addTest = function (a, b) {
        if (typeof a == "object")
            for (var d in a)
                w(a, d) && e.addTest(d, a[d]);
        else {
            a = a.toLowerCase();
            if (e[a] !== c)
                return e;
            b = typeof b == "function" ? b() : b, typeof f != "undefined" && f && (g.className += " " + (b ? "" : "no-") + a), e[a] = b
        }
        return e
    }, x(""), i = k = null,
            function (a, b) {
                function l(a, b) {
                    var c = a.createElement("p"),
                            d = a.getElementsByTagName("head")[0] || a.documentElement;
                    return c.innerHTML = "x<style>" + b + "</style>", d.insertBefore(c.lastChild, d.firstChild)
                }

                function m() {
                    var a = s.elements;
                    return typeof a == "string" ? a.split(" ") : a
                }

                function n(a) {
                    var b = j[a[h]];
                    return b || (b = {}, i++, a[h] = i, j[i] = b), b
                }

                function o(a, c, d) {
                    c || (c = b);
                    if (k)
                        return c.createElement(a);
                    d || (d = n(c));
                    var g;
                    return d.cache[a] ? g = d.cache[a].cloneNode() : f.test(a) ? g = (d.cache[a] = d.createElem(a)).cloneNode() : g = d.createElem(a), g.canHaveChildren && !e.test(a) && !g.tagUrn ? d.frag.appendChild(g) : g
                }

                function p(a, c) {
                    a || (a = b);
                    if (k)
                        return a.createDocumentFragment();
                    c = c || n(a);
                    var d = c.frag.cloneNode(),
                            e = 0,
                            f = m(),
                            g = f.length;
                    for (; e < g; e++)
                        d.createElement(f[e]);
                    return d
                }

                function q(a, b) {
                    b.cache || (b.cache = {}, b.createElem = a.createElement, b.createFrag = a.createDocumentFragment, b.frag = b.createFrag()), a.createElement = function (c) {
                        return s.shivMethods ? o(c, a, b) : b.createElem(c)
                    }, a.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + m().join().replace(/[\w\-]+/g, function (a) {
                        return b.createElem(a), b.frag.createElement(a), 'c("' + a + '")'
                    }) + ");return n}")(s, b.frag)
                }

                function r(a) {
                    a || (a = b);
                    var c = n(a);
                    return s.shivCSS && !g && !c.hasCSS && (c.hasCSS = !!l(a, "article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")), k || q(a, c), a
                }
                var c = "3.7.0",
                        d = a.html5 || {},
                        e = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
                        f = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
                        g, h = "_html5shiv",
                        i = 0,
                        j = {},
                        k;
                (function () {
                    try {
                        var a = b.createElement("a");
                        a.innerHTML = "<xyz></xyz>", g = "hidden" in a, k = a.childNodes.length == 1 || function () {
                            b.createElement("a");
                            var a = b.createDocumentFragment();
                            return typeof a.cloneNode == "undefined" || typeof a.createDocumentFragment == "undefined" || typeof a.createElement == "undefined"
                        }()
                    } catch (c) {
                        g = !0, k = !0
                    }
                })();
                var s = {
                    elements: d.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",
                    version: c,
                    shivCSS: d.shivCSS !== !1,
                    supportsUnknownElements: k,
                    shivMethods: d.shivMethods !== !1,
                    type: "default",
                    shivDocument: r,
                    createElement: o,
                    createDocumentFragment: p
                };
                a.html5 = s, r(b)
            }(this, b), e._version = d, e._domPrefixes = o, e._cssomPrefixes = n, e.testProp = function (a) {
        return B([a])
    }, e.testAllProps = D, e.prefixed = function (a, b, c) {
        return b ? D(a, b, c) : D(a, "pfx")
    }, g.className = g.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (f ? " js " + s.join(" ") : ""), e
}(this, this.document),
        function (a, b, c) {
            function d(a) {
                return "[object Function]" == o.call(a)
            }

            function e(a) {
                return "string" == typeof a
            }

            function f() {}

            function g(a) {
                return !a || "loaded" == a || "complete" == a || "uninitialized" == a
            }

            function h() {
                var a = p.shift();
                q = 1, a ? a.t ? m(function () {
                    ("c" == a.t ? B.injectCss : B.injectJs)(a.s, 0, a.a, a.x, a.e, 1)
                }, 0) : (a(), h()) : q = 0
            }

            function i(a, c, d, e, f, i, j) {
                function k(b) {
                    if (!o && g(l.readyState) && (u.r = o = 1, !q && h(), l.onload = l.onreadystatechange = null, b)) {
                        "img" != a && m(function () {
                            t.removeChild(l)
                        }, 50);
                        for (var d in y[c])
                            y[c].hasOwnProperty(d) && y[c][d].onload()
                    }
                }
                var j = j || B.errorTimeout,
                        l = b.createElement(a),
                        o = 0,
                        r = 0,
                        u = {
                            t: d,
                            s: c,
                            e: f,
                            a: i,
                            x: j
                        };
                1 === y[c] && (r = 1, y[c] = []), "object" == a ? l.data = c : (l.src = c, l.type = a), l.width = l.height = "0", l.onerror = l.onload = l.onreadystatechange = function () {
                    k.call(this, r)
                }, p.splice(e, 0, u), "img" != a && (r || 2 === y[c] ? (t.insertBefore(l, s ? null : n), m(k, j)) : y[c].push(l))
            }

            function j(a, b, c, d, f) {
                return q = 0, b = b || "j", e(a) ? i("c" == b ? v : u, a, b, this.i++, c, d, f) : (p.splice(this.i++, 0, a), 1 == p.length && h()), this
            }

            function k() {
                var a = B;
                return a.loader = {
                    load: j,
                    i: 0
                }, a
            }
            var l = b.documentElement,
                    m = a.setTimeout,
                    n = b.getElementsByTagName("script")[0],
                    o = {}.toString,
                    p = [],
                    q = 0,
                    r = "MozAppearance" in l.style,
                    s = r && !!b.createRange().compareNode,
                    t = s ? l : n.parentNode,
                    l = a.opera && "[object Opera]" == o.call(a.opera),
                    l = !!b.attachEvent && !l,
                    u = r ? "object" : l ? "script" : "img",
                    v = l ? "script" : u,
                    w = Array.isArray || function (a) {
                        return "[object Array]" == o.call(a)
                    },
                    x = [],
                    y = {},
                    z = {
                        timeout: function (a, b) {
                            return b.length && (a.timeout = b[0]), a
                        }
                    },
                    A, B;
            B = function (a) {
                function b(a) {
                    var a = a.split("!"),
                            b = x.length,
                            c = a.pop(),
                            d = a.length,
                            c = {
                                url: c,
                                origUrl: c,
                                prefixes: a
                            },
                            e, f, g;
                    for (f = 0; f < d; f++)
                        g = a[f].split("="), (e = z[g.shift()]) && (c = e(c, g));
                    for (f = 0; f < b; f++)
                        c = x[f](c);
                    return c
                }

                function g(a, e, f, g, h) {
                    var i = b(a),
                            j = i.autoCallback;
                    i.url.split(".").pop().split("?").shift(), i.bypass || (e && (e = d(e) ? e : e[a] || e[g] || e[a.split("/").pop().split("?")[0]]), i.instead ? i.instead(a, e, f, g, h) : (y[i.url] ? i.noexec = !0 : y[i.url] = 1, f.load(i.url, i.forceCSS || !i.forceJS && "css" == i.url.split(".").pop().split("?").shift() ? "c" : c, i.noexec, i.attrs, i.timeout), (d(e) || d(j)) && f.load(function () {
                        k(), e && e(i.origUrl, h, g), j && j(i.origUrl, h, g), y[i.url] = 2
                    })))
                }

                function h(a, b) {
                    function c(a, c) {
                        if (a) {
                            if (e(a))
                                c || (j = function () {
                                    var a = [].slice.call(arguments);
                                    k.apply(this, a), l()
                                }), g(a, j, b, 0, h);
                            else if (Object(a) === a)
                                for (n in m = function() {
                                var b = 0,
                                        c;
                                        for (c in a) a.hasOwnProperty(c) && b++;
                                        return b
                                }(), a)
                                    a.hasOwnProperty(n) && (!c && !--m && (d(j) ? j = function () {
                                        var a = [].slice.call(arguments);
                                        k.apply(this, a), l()
                                    } : j[n] = function (a) {
                                        return function () {
                                            var b = [].slice.call(arguments);
                                            a && a.apply(this, b), l()
                                        }
                                    }(k[n])), g(a[n], j, b, n, h))
                        } else
                            !c && l()
                    }
                    var h = !!a.test,
                            i = a.load || a.both,
                            j = a.callback || f,
                            k = j,
                            l = a.complete || f,
                            m, n;
                    c(h ? a.yep : a.nope, !!i), i && c(i)
                }
                var i, j, l = this.yepnope.loader;
                if (e(a))
                    g(a, 0, l, 0);
                else if (w(a))
                    for (i = 0; i < a.length; i++)
                        j = a[i], e(j) ? g(j, 0, l, 0) : w(j) ? B(j) : Object(j) === j && h(j, l);
                else
                    Object(a) === a && h(a, l)
            }, B.addPrefix = function (a, b) {
                z[a] = b
            }, B.addFilter = function (a) {
                x.push(a)
            }, B.errorTimeout = 1e4, null == b.readyState && b.addEventListener && (b.readyState = "loading", b.addEventListener("DOMContentLoaded", A = function () {
                b.removeEventListener("DOMContentLoaded", A, 0), b.readyState = "complete"
            }, 0)), a.yepnope = k(), a.yepnope.executeStack = h, a.yepnope.injectJs = function (a, c, d, e, i, j) {
                var k = b.createElement("script"),
                        l, o, e = e || B.errorTimeout;
                k.src = a;
                for (o in d)
                    k.setAttribute(o, d[o]);
                c = j ? h : c || f, k.onreadystatechange = k.onload = function () {
                    !l && g(k.readyState) && (l = 1, c(), k.onload = k.onreadystatechange = null)
                }, m(function () {
                    l || (l = 1, c(1))
                }, e), i ? k.onload() : n.parentNode.insertBefore(k, n)
            }, a.yepnope.injectCss = function (a, c, d, e, g, i) {
                var e = b.createElement("link"),
                        j, c = i ? h : c || f;
                e.href = a, e.rel = "stylesheet", e.type = "text/css";
                for (j in d)
                    e.setAttribute(j, d[j]);
                g || (n.parentNode.insertBefore(e, n), m(c, 0))
            }
        }(this, document), Modernizr.load = function () {
    yepnope.apply(window, [].slice.call(arguments, 0))
};


$(document).ready(function () {

    //brand page functions
    $(document).click(function () {
        $(".brand-page-wrapper .grid").animate({
            'padding-bottom': 0
        }, {
            duration: "slow",
            queue: false
        });
        $(".brand-page-wrapper .brands-wrapper").slideUp("slow");
        $(".brand-page-wrapper .image-wrapper").removeClass("open");
    });

    $(".brand-page-wrapper .brands-wrapper .close").click(function () {
        $(".brand-page-wrapper .grid").animate({
            'padding-bottom': 0
        }, {
            duration: "slow",
            queue: false
        });
        $(".brand-page-wrapper .brands-wrapper").slideUp("slow");
        $(".brand-page-wrapper .image-wrapper").removeClass("open");
    });

    $(".image-wrapper").on('click', function (e) {
        e.stopPropagation();
        var flyout = $(this).siblings(".brand-page-wrapper .brands-wrapper");
        var leftPosition = -1 * $(this).offset().left;
        flyout.css("left", leftPosition);
        flyout.css("width", document.body.clientWidth);
        $(".brand-page-wrapper .brands-wrapper").slideUp();
        $(".brand-page-wrapper .image-wrapper").removeClass("open");
        $(".brand-page-wrapper .grid").animate({
            'padding-bottom': 0
        }, {
            duration: "slow",
            queue: false
        });
        $(this).parents(".brand-page-wrapper .grid").animate({
            'padding-bottom': flyout.outerHeight(true)
        }, {
            duration: "slow",
            queue: false
        });
        $(this).addClass("open");
        flyout.slideToggle("slow");
    });

    //sricky header
    var pixels = $('.top-info-wrapper').height();

    if ($(this).scrollTop() > pixels) {
        $('header').addClass("sticky");
    } else {
        $('header').removeClass("sticky");
    }

    $(window).scroll(function () {
        if ($(this).scrollTop() > pixels) {
            $('header').addClass("sticky");
        } else {
            $('header').removeClass("sticky");
        }
        toggleOverlay();
    });

    //Newsletter Submittion handling

    var newsletterForm = $('.newsletter_form');

    newsletterForm.on('submit', function (e) {
        e.preventDefault();
        var currentValue = $('.nl_inp').val().trim();
        var newsletterMessages = $('.newsletter_form .message');

        if (currentValue == '') {
            newsletterMessages.hide();
            $('.newsletter_form .empty_error').show();
        } else if (validateEmail(currentValue)) {
            newsletterMessages.hide();
            $.ajax({
                type: "POST",
                url: "/services/NewsletterSubscription.php",
                data: '{"email":"' + currentValue + '"}',
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    if (!data) {
                        newsletterMessages.hide();
                        $('.newsletter_form .newsletter_success').show()
                    } else {
                        newsletterMessages.hide();
                        $('.newsletter_form .duplicate_error').show()
                    }
                },
                error: function (e) {
                    $('.newsletter_form .generic_error').show();
                }
            });
        } else {
            newsletterMessages.hide();
            $('.newsletter_form .invalid_error').show();
        }
    });


    //Contact Form Submittion handling

    var contactForm = $('.contact-form-wrapper .form');

    contactForm.on('submit', function (e) {
        e.preventDefault();

        var loading = $('.contact-form-wrapper .loading');
        var email = $('.contact-form-wrapper .form .email');
        var continueFlag = 1;
        var registerValidators = $('.contact-form-wrapper .message');
        var requiredFields = $('.contact-form-wrapper .form .required .input');

        loading.show();
        registerValidators.hide();

        if (!validateEmail(email.val().trim())) {
            email.siblings('.message').hide();
            $('.contact-form-wrapper .form .invalid_error').css('display', 'block');
            continueFlag = 0;
        }

        requiredFields.each(function (index) {
            currentValue = $(this).val().trim();
            if (currentValue == '') {
                $(this).siblings('.message').hide();
                $(this).siblings('.empty_error').css('display', 'block');
                continueFlag = 0;
            }
        });

        if (continueFlag) {
            var firstName = $('.contact-form-wrapper .form .first_name').val();
            var lastName = $('.contact-form-wrapper .form .last_name').val();
            var email = email.val().trim();
            var phone = $('.contact-form-wrapper .form .phone').val();
            var message = $('.contact-form-wrapper .form .message-area').val();
            var data = '{"firstName":"' + firstName + '","lastName":"' + lastName + '","email":"' + email + '","phone":"' + phone + '","message":"' + message + '"}';
            data = escape(data);

            $.ajax({
                type: "POST",
                url: "/services/ContactService.php",
                data: data,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    if (data) {
                        $('.contact-form-wrapper .form_description_wrapper').hide();
                        $('.contact-form-wrapper .success_wrapper').css('display', 'block');
                    } else {

                    }
                    loading.hide();
                },
                error: function (e) {
                    $('.contact-form-wrapper .generic_error').css('display', 'block');
                    loading.hide();
                }
            });
        } else {
            loading.hide();
        }
    });

    function escape(str) {
        return str
                .replace(/[\/]/g, '\\/')
                .replace(/[\b]/g, '\\b')
                .replace(/[\f]/g, '\\f')
                .replace(/[\n]/g, '\\n')
                .replace(/[\r]/g, '\\r')
                .replace(/[\t]/g, '\\t');
    }
    ;

    //Email Validation
    function validateEmail(email) {
        if (email.match(/^[\w.%+-]+@[\w.-]+\.[A-Z]{2,4}$/i) != null) {
            return true;
        } else {
            return false;
        }
    }

    $(".main-slider.owl-carousel").owlCarousel({
        navigation: false, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: 5000
    });

    marqueeInit({
        uniqueid: 'brand-slider',
        style: {
        },
        inc: 5, //speed - pixel increment for each iteration of this marquee's movement
        mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
        moveatleast: 2,
        neutral: 0,
        savedirection: true,
        random: false
    });

    /*!
     * classie - class helper functions
     * from bonzo https://github.com/ded/bonzo
     * 
     * classie.has( elem, 'my-class' ) -> true/false
     * classie.add( elem, 'my-new-class' )
     * classie.remove( elem, 'my-unwanted-class' )
     * classie.toggle( elem, 'my-class' )
     */

    /*jshint browser: true, strict: true, undef: true */
    /*global define: false */

    (function (window) {

        'use strict';

        // class helper functions from bonzo https://github.com/ded/bonzo

        function classReg(className) {
            return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
        }

        // classList support for class management
        // altho to be fair, the api sucks because it won't accept multiple classes at once
        var hasClass, addClass, removeClass;

        if ('classList' in document.documentElement) {
            hasClass = function (elem, c) {
                return elem.classList.contains(c);
            };
            addClass = function (elem, c) {
                elem.classList.add(c);
            };
            removeClass = function (elem, c) {
                elem.classList.remove(c);
            };
        } else {
            hasClass = function (elem, c) {
                return classReg(c).test(elem.className);
            };
            addClass = function (elem, c) {
                if (!hasClass(elem, c)) {
                    elem.className = elem.className + ' ' + c;
                }
            };
            removeClass = function (elem, c) {
                elem.className = elem.className.replace(classReg(c), ' ');
            };
        }

        function toggleClass(elem, c) {
            var fn = hasClass(elem, c) ? removeClass : addClass;
            fn(elem, c);
        }

        var classie = {
            // full names
            hasClass: hasClass,
            addClass: addClass,
            removeClass: removeClass,
            toggleClass: toggleClass,
            // short names
            has: hasClass,
            add: addClass,
            remove: removeClass,
            toggle: toggleClass
        };

        // transport
        if (typeof define === 'function' && define.amd) {
            // AMD
            define(classie);
        } else {
            // browser global
            window.classie = classie;
        }

    })(window);
    (function () {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
            (function () {
                // Make sure we trim BOM and NBSP
                var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                String.prototype.trim = function () {
                    return this.replace(rtrim, '');
                };
            })();
        }

        [].slice.call(document.querySelectorAll('.input__field')).forEach(function (inputEl) {
            // in case the input is already filled..
            if (inputEl.value.trim() !== '') {
                classie.add(inputEl.parentNode, 'input-filled');
            }

            // events:
            inputEl.addEventListener('focus', onInputFocus);
            inputEl.addEventListener('blur', onInputBlur);
        });

        function onInputFocus(ev) {
            classie.add(ev.target.parentNode, 'input-filled');
        }


        function onInputBlur(ev) {
            if (ev.target.value.trim() === '') {
                classie.remove(ev.target.parentNode, 'input-filled');
            }
        }
    })();

    //home page imported brands
    $(".effect-sarah").click(function () {
        $(this).siblings(".overlay").addClass("open");
        $(this).siblings(".overlay").slideDown();
    });

    //Overlay handling
    $('div.overlay').click(toggleOverlay);
    $('.overlay-close').click(toggleOverlay);

    function toggleOverlay() {
        $('div.overlay').removeClass('open');
        $('div.overlay').slideUp();
        document.cookie = "overlay=opened; path=/";
    }
    
    
    //Language Selector
    $(".lang-wrapper span").click(function (){
        window.location = window.location.origin + window.location.pathname + "?lang=" + $(this).data( "lang");
        
    })
});