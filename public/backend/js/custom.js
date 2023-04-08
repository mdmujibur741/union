$(document).ready(function() {
    $('#responsive-datatable').DataTable();
});

checked = false;

function checkedAll() {
    if (checked == false) {
        checked = true
    } else {
        checked = false
    }
    for (var i = 0; i < document.getElementById('form_check').elements.length; i++) {
        document.getElementById('form_check').elements[i].checked = checked;
    }
}


function permissions(tables, status, statuscol) {
    var summeCode = document.getElementsByName("summe_code[]");
    var j = 0;
    var dataval = new Array();

    for (var i = 0; i < summeCode.length; i++) {
        if (summeCode[i].checked) {
            dataval[j] = summeCode[i].value;
            j++;
        }
    }
    if (dataval == "") {
        alert("Please check one or more!");
        return false;
    } else {
        if (tables == 'customers') {
            var urls = "http://chambalup.org/administration/permissionsuser";
        } else {
            var urls = "http://chambalup.org/administration/permissions";
        }

        var hrefdata = urls + "?approve_val=" + dataval + "&&tablename=" + tables + "&&status=" + status + "&&statuscol=" + statuscol;
        window.location.href = hrefdata;
    }
}

function deletedata(patch, tables) {
    var summeCode = document.getElementsByName("summe_code[]");
    var j = 0;
    var dataval = new Array();
    var furl = patch;
    var imagedel = false;
    for (var i = 0; i < summeCode.length; i++) {
        if (summeCode[i].checked) {
            dataval[j] = summeCode[i].value;
            j++;
        }
    }
    if (dataval == "") {
        swal({
            title: "Unchecked credential!",
            text: "Please check one or more!",
            icon: "warning",
        });
        return false;
    } else {

        swal({
            title: 'Are you sure?',
            //type: 'warning',
            imageUrl: "http://chambalup.org/assets/images/favicons/favicon.png",
            confirmButtonText: 'Ok, Delete It',
            showCloseButton: true,
            showCancelButton: true,
            text: "Do you want to Delete Selected Data !",
            // input: 'checkbox',
            //inputPlaceholder: ' Delete all Images for Selected Submission'
        }).then((result) => {
            if (result.value) {
                //swal({type: 'success', text: 'You have a bike!'});
                imagedel = true;
                $.ajax({
                    type: "GET",
                    url: furl,
                    data: {
                        'id': dataval,
                        'deletetype': 'multiple',
                        'deleteimage': imagedel,
                        'tablename': tables
                    },
                    cache: false,
                    success: function(html) {
                        swal({
                            title: "Successfully Delete!",
                            text: "All selected data are deleted",
                            type: "success",
                        });
                        var len = html.length;
                        for (i in html) {
                            $("#tablerow" + html[i]).fadeOut('slow');
                        }
                    }
                });

            } else {
                console.log('modal was dismissed by ${result.dismiss}')
            }

        });
    }
}

function deleteSingle(id, patch, tables) {

    var furl = patch;
    //alert(tables);
    var imagedel = false;

    swal({
        imageUrl: "http://chambalup.org/assets/images/favicons/favicon.png",
        title: 'Are you sure?',
        confirmButtonText: 'Ok, Delete It',
        //type: 'warning',
        showCloseButton: true,
        showCancelButton: true,
        text: "Do you want to Delete Selected data !",
        //input: 'checkbox',
        //inputPlaceholder: ' Delete all Images for Selected data'
    }).then((result) => {
        if (result.value) {
            //swal({type: 'success', text: 'You have a bike!'});
            imagedel = true;
            $.ajax({
                type: "GET",
                url: furl,
                data: {
                    'id': id,
                    'deletetype': 'single',
                    'deleteimage': imagedel,
                    'tablename': tables
                },
                cache: false,
                success: function(html) {
                    swal({
                        title: "Successfully Delete!",
                        text: "All selected data are deleted",
                        type: "success",
                    });
                    $("#tablerow" + id).fadeOut('slow');
                }
            });

        } else if (result.value === 0) {
            //swal({type: 'error', text: "You don't have a bike :("});
            imagedel = false;
            $.ajax({
                type: "GET",
                url: furl,
                data: {
                    'id': id,
                    'deletetype': 'single',
                    'deleteimage': imagedel,
                    'tablename': tables
                },
                cache: false,
                success: function(html) {
                    swal({
                        title: "Successfully Delete!",
                        text: "All selected Submission are deleted",
                        type: "success",
                    });
                    $("#tablerow" + id).fadeOut('slow');
                }
            });

        } else {
            console.log('modal was dismissed by ${result.dismiss}')
        }

    });
}


Sfdump = window.Sfdump || (function(doc) {
    var refStyle = doc.createElement('style'),
        rxEsc = /([.*+?^${}()|\[\]\/\\])/g,
        idRx = /\bsf-dump-\d+-ref[012]\w+\b/,
        keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl',
        addEventListener = function(e, n, cb) {
            e.addEventListener(n, cb, false);
        };
    (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle);
    if (!doc.addEventListener) {
        addEventListener = function(element, eventName, callback) {
            element.attachEvent('on' + eventName, function(e) {
                e.preventDefault = function() {
                    e.returnValue = false;
                };
                e.target = e.srcElement;
                callback(e);
            });
        };
    }

    function toggle(a, recursive) {
        var s = a.nextSibling || {},
            oldClass = s.className,
            arrow, newClass;
        if (/\bsf-dump-compact\b/.test(oldClass)) {
            arrow = '▼';
            newClass = 'sf-dump-expanded';
        } else if (/\bsf-dump-expanded\b/.test(oldClass)) {
            arrow = '▶';
            newClass = 'sf-dump-compact';
        } else {
            return false;
        }
        if (doc.createEvent && s.dispatchEvent) {
            var event = doc.createEvent('Event');
            event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false);
            s.dispatchEvent(event);
        }
        a.lastChild.innerHTML = arrow;
        s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass);
        if (recursive) {
            try {
                a = s.querySelectorAll('.' + oldClass);
                for (s = 0; s < a.length; ++s) {
                    if (-1 == a[s].className.indexOf(newClass)) {
                        a[s].className = newClass;
                        a[s].previousSibling.lastChild.innerHTML = arrow;
                    }
                }
            } catch (e) {}
        }
        return true;
    };

    function collapse(a, recursive) {
        var s = a.nextSibling || {},
            oldClass = s.className;
        if (/\bsf-dump-expanded\b/.test(oldClass)) {
            toggle(a, recursive);
            return true;
        }
        return false;
    };

    function expand(a, recursive) {
        var s = a.nextSibling || {},
            oldClass = s.className;
        if (/\bsf-dump-compact\b/.test(oldClass)) {
            toggle(a, recursive);
            return true;
        }
        return false;
    };

    function collapseAll(root) {
        var a = root.querySelector('a.sf-dump-toggle');
        if (a) {
            collapse(a, true);
            expand(a);
            return true;
        }
        return false;
    }

    function reveal(node) {
        var previous, parents = [];
        while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) {
            parents.push(previous);
        }
        if (0 !== parents.length) {
            parents.forEach(function(parent) {
                expand(parent);
            });
            return true;
        }
        return false;
    }

    function highlight(root, activeNode, nodes) {
        resetHighlightedNodes(root);
        Array.from(nodes || []).forEach(function(node) {
            if (!/\bsf-dump-highlight\b/.test(node.className)) {
                node.className = node.className + ' sf-dump-highlight';
            }
        });
        if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) {
            activeNode.className = activeNode.className + ' sf-dump-highlight-active';
        }
    }

    function resetHighlightedNodes(root) {
        Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function(strNode) {
            strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, '');
            strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, '');
        });
    }
    return function(root, x) {
        root = doc.getElementById(root);
        var indentRx = new RegExp('^(' + (root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1') + ')+', 'm'),
            options = {
                "maxDepth": 1,
                "maxStringLength": 160,
                "fileLinkFormat": false
            },
            elt = root.getElementsByTagName('A'),
            len = elt.length,
            i = 0,
            s, h, t = [];
        while (i < len) t.push(elt[i++]);
        for (i in x) {
            options[i] = x[i];
        }

        function a(e, f) {
            addEventListener(root, e, function(e, n) {
                if ('A' == e.target.tagName) {
                    f(e.target, e);
                } else if ('A' == e.target.parentNode.tagName) {
                    f(e.target.parentNode, e);
                } else {
                    n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode : e.target;
                    if ((n = n.nextElementSibling) && 'A' == n.tagName) {
                        if (!/\bsf-dump-toggle\b/.test(n.className)) {
                            n = n.nextElementSibling || n;
                        }
                        f(n, e, true);
                    }
                }
            });
        };

        function isCtrlKey(e) {
            return e.ctrlKey || e.metaKey;
        }

        function xpathString(str) {
            var parts = str.match(/[^'"]+|['"]/g).map(function(part) {
                if ("'" == part) {
                    return '"\'"';
                }
                if ('"' == part) {
                    return "'\"'";
                }
                return "'" + part + "'";
            });
            return "concat(" + parts.join(",") + ", '')";
        }

        function xpathHasClass(className) {
            return "contains(concat(' ', normalize-space(@class), ' '), ' " + className + " ')";
        }
        addEventListener(root, 'mouseover', function(e) {
            if ('' != refStyle.innerHTML) {
                refStyle.innerHTML = '';
            }
        });
        a('mouseover', function(a, e, c) {
            if (c) {
                e.target.style.cursor = "pointer";
            } else if (a = idRx.exec(a.className)) {
                try {
                    refStyle.innerHTML = '.phpdebugbar pre.sf-dump .' + a[0] + '{background-color: #B729D9; color: #FFF !important; border-radius: 2px}';
                } catch (e) {}
            }
        });
        a('click', function(a, e, c) {
            if (/\bsf-dump-toggle\b/.test(a.className)) {
                e.preventDefault();
                if (!toggle(a, isCtrlKey(e))) {
                    var r = doc.getElementById(a.getAttribute('href').substr(1)),
                        s = r.previousSibling,
                        f = r.parentNode,
                        t = a.parentNode;
                    t.replaceChild(r, a);
                    f.replaceChild(a, s);
                    t.insertBefore(s, r);
                    f = f.firstChild.nodeValue.match(indentRx);
                    t = t.firstChild.nodeValue.match(indentRx);
                    if (f && t && f[0] !== t[0]) {
                        r.innerHTML = r.innerHTML.replace(new RegExp('^' + f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]);
                    }
                    if (/\bsf-dump-compact\b/.test(r.className)) {
                        toggle(s, isCtrlKey(e));
                    }
                }
                if (c) {} else if (doc.getSelection) {
                    try {
                        doc.getSelection().removeAllRanges();
                    } catch (e) {
                        doc.getSelection().empty();
                    }
                } else {
                    doc.selection.empty();
                }
            } else if (/\bsf-dump-str-toggle\b/.test(a.className)) {
                e.preventDefault();
                e = a.parentNode.parentNode;
                e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className);
            }
        });
        elt = root.getElementsByTagName('SAMP');
        len = elt.length;
        i = 0;
        while (i < len) t.push(elt[i++]);
        len = t.length;
        for (i = 0; i < len; ++i) {
            elt = t[i];
            if ('SAMP' == elt.tagName) {
                a = elt.previousSibling || {};
                if ('A' != a.tagName) {
                    a = doc.createElement('A');
                    a.className = 'sf-dump-ref';
                    elt.parentNode.insertBefore(a, elt);
                } else {
                    a.innerHTML += ' ';
                }
                a.title = (a.title ? a.title + '\n[' : '[') + keyHint + '+click] Expand all children';
                a.innerHTML += '<span>▼</span>';
                a.className += ' sf-dump-toggle';
                x = 1;
                if ('sf-dump' != elt.parentNode.className) {
                    x += elt.parentNode.getAttribute('data-depth') / 1;
                }
                elt.setAttribute('data-depth', x);
                var className = elt.className;
                elt.className = 'sf-dump-expanded';
                if (className ? 'sf-dump-expanded' !== className : (x > options.maxDepth)) {
                    toggle(a);
                }
            } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) {
                a = a.substr(1);
                elt.className += ' ' + a;
                if (/[\[{]$/.test(elt.previousSibling.nodeValue)) {
                    a = a != elt.nextSibling.id && doc.getElementById(a);
                    try {
                        s = a.nextSibling;
                        elt.appendChild(a);
                        s.parentNode.insertBefore(a, s);
                        if (/^[@#]/.test(elt.innerHTML)) {
                            elt.innerHTML += ' <span>▶</span>';
                        } else {
                            elt.innerHTML = '<span>▶</span>';
                            elt.className = 'sf-dump-ref';
                        }
                        elt.className += ' sf-dump-toggle';
                    } catch (e) {
                        if ('&' == elt.innerHTML.charAt(0)) {
                            elt.innerHTML = '…';
                            elt.className = 'sf-dump-ref';
                        }
                    }
                }
            }
        }
        if (doc.evaluate && Array.from && root.children.length > 1) {
            root.setAttribute('tabindex', 0);
            SearchState = function() {
                this.nodes = [];
                this.idx = 0;
            };
            SearchState.prototype = {
                next: function() {
                    if (this.isEmpty()) {
                        return this.current();
                    }
                    this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0;
                    return this.current();
                },
                previous: function() {
                    if (this.isEmpty()) {
                        return this.current();
                    }
                    this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1);
                    return this.current();
                },
                isEmpty: function() {
                    return 0 === this.count();
                },
                current: function() {
                    if (this.isEmpty()) {
                        return null;
                    }
                    return this.nodes[this.idx];
                },
                reset: function() {
                    this.nodes = [];
                    this.idx = 0;
                },
                count: function() {
                    return this.nodes.length;
                },
            };

            function showCurrent(state) {
                var currentNode = state.current(),
                    currentRect, searchRect;
                if (currentNode) {
                    reveal(currentNode);
                    highlight(root, currentNode, state.nodes);
                    if ('scrollIntoView' in currentNode) {
                        currentNode.scrollIntoView(true);
                        currentRect = currentNode.getBoundingClientRect();
                        searchRect = search.getBoundingClientRect();
                        if (currentRect.top < (searchRect.top + searchRect.height)) {
                            window.scrollBy(0, -(searchRect.top + searchRect.height + 5));
                        }
                    }
                }
                counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count();
            }
            var search = doc.createElement('div');
            search.className = 'sf-dump-search-wrapper sf-dump-search-hidden';
            search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> ';
            root.insertBefore(search, root.firstChild);
            var state = new SearchState();
            var searchInput = search.querySelector('.sf-dump-search-input');
            var counter = search.querySelector('.sf-dump-search-count');
            var searchInputTimer = 0;
            var previousSearchQuery = '';
            addEventListener(searchInput, 'keyup', function(e) {
                var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */
                if (searchQuery === previousSearchQuery) {
                    return;
                }
                previousSearchQuery = searchQuery;
                clearTimeout(searchInputTimer);
                searchInputTimer = setTimeout(function() {
                    state.reset();
                    collapseAll(root);
                    resetHighlightedNodes(root);
                    if ('' === searchQuery) {
                        counter.textContent = '0 of 0';
                        return;
                    }
                    var classMatches = ["sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or ');
                    var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null);
                    while (node = xpathResult.iterateNext()) state.nodes.push(node);
                    showCurrent(state);
                }, 400);
            });
            Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function(btn) {
                addEventListener(btn, 'click', function(e) {
                    e.preventDefault(); - 1 !== e.target.className.indexOf('next') ? state.next() : state.previous();
                    searchInput.focus();
                    collapseAll(root);
                    showCurrent(state);
                })
            });
            addEventListener(root, 'keydown', function(e) {
                var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className);
                if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */
                    if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */
                        return;
                    }
                    e.preventDefault();
                    search.className = search.className.replace(/\bsf-dump-search-hidden\b/, '');
                    searchInput.focus();
                } else if (isSearchActive) {
                    if (27 === e.keyCode) { /* ESC key */
                        search.className += ' sf-dump-search-hidden';
                        e.preventDefault();
                        resetHighlightedNodes(root);
                        searchInput.value = '';
                    } else if ((isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) {
                        e.preventDefault();
                        e.shiftKey ? state.previous() : state.next();
                        collapseAll(root);
                        showCurrent(state);
                    }
                }
            });
        }
        if (0 >= options.maxStringLength) {
            return;
        }
        try {
            elt = root.querySelectorAll('.sf-dump-str');
            len = elt.length;
            i = 0;
            t = [];
            while (i < len) t.push(elt[i++]);
            len = t.length;
            for (i = 0; i < len; ++i) {
                elt = t[i];
                s = elt.innerText || elt.textContent;
                x = s.length - options.maxStringLength;
                if (0 < x) {
                    h = elt.innerHTML;
                    elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength);
                    elt.className += ' sf-dump-str-collapse';
                    elt.innerHTML = '<span class=sf-dump-str-collapse>' + h + '<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span>' + '<span class=sf-dump-str-expand>' + elt.innerHTML + '<a class="sf-dump-ref sf-dump-str-toggle" title="' + x + ' remaining characters"> ▶</a></span>';
                }
            }
        } catch (e) {}
    };
})(document);




var phpdebugbar = new PhpDebugBar.DebugBar();
phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({
    "icon": "code",
    "tooltip": "PHP Version"
}), "right");
phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({
    "icon": "list-alt",
    "title": "Messages",
    "widget": new PhpDebugBar.Widgets.MessagesWidget()
}));
phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({
    "icon": "clock-o",
    "tooltip": "Request Duration"
}), "right");
phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({
    "icon": "tasks",
    "title": "Timeline",
    "widget": new PhpDebugBar.Widgets.TimelineWidget()
}));
phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({
    "icon": "cogs",
    "tooltip": "Memory Usage"
}), "right");
phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({
    "icon": "bug",
    "title": "Exceptions",
    "widget": new PhpDebugBar.Widgets.ExceptionsWidget()
}));
phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({
    "icon": "leaf",
    "title": "Views",
    "widget": new PhpDebugBar.Widgets.TemplatesWidget()
}));
phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({
    "icon": "share",
    "title": "Route",
    "widget": new PhpDebugBar.Widgets.VariableListWidget()
}));
phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({
    "icon": "share",
    "tooltip": "Route"
}), "right");
phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({
    "icon": "database",
    "title": "Queries",
    "widget": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()
}));
phpdebugbar.addTab("models", new PhpDebugBar.DebugBar.Tab({
    "icon": "cubes",
    "title": "Models",
    "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()
}));
phpdebugbar.addTab("emails", new PhpDebugBar.DebugBar.Tab({
    "icon": "inbox",
    "title": "Mails",
    "widget": new PhpDebugBar.Widgets.MailsWidget()
}));
phpdebugbar.addTab("gate", new PhpDebugBar.DebugBar.Tab({
    "icon": "list-alt",
    "title": "Gate",
    "widget": new PhpDebugBar.Widgets.MessagesWidget()
}));
phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({
    "icon": "archive",
    "title": "Session",
    "widget": new PhpDebugBar.Widgets.VariableListWidget()
}));
phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({
    "icon": "tags",
    "title": "Request",
    "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()
}));
phpdebugbar.setDataMap({
    "php_version": ["php.version", ],
    "messages": ["messages.messages", []],
    "messages:badge": ["messages.count", null],
    "time": ["time.duration_str", '0ms'],
    "timeline": ["time", {}],
    "memory": ["memory.peak_usage_str", '0B'],
    "exceptions": ["exceptions.exceptions", []],
    "exceptions:badge": ["exceptions.count", null],
    "views": ["views", []],
    "views:badge": ["views.nb_templates", 0],
    "route": ["route", {}],
    "currentroute": ["route.uri", ],
    "queries": ["queries", []],
    "queries:badge": ["queries.nb_statements", 0],
    "models": ["models.data", {}],
    "models:badge": ["models.count", 0],
    "emails": ["swiftmailer_mails.mails", []],
    "emails:badge": ["swiftmailer_mails.count", null],
    "gate": ["gate.messages", []],
    "gate:badge": ["gate.count", null],
    "session": ["session", {}],
    "request": ["request", {}]
});
phpdebugbar.restoreState();
phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
phpdebugbar.ajaxHandler.bindToFetch();
phpdebugbar.ajaxHandler.bindToXHR();
phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({
    "url": "http:\/\/chambalup.org\/_debugbar\/open"
}));
phpdebugbar.addDataSet({
    "__meta": {
        "id": "X3e58bdd861027a83aa8193f977de793a",
        "datetime": "2023-03-21 23:35:20",
        "utime": 1679420120.772551059722900390625,
        "method": "GET",
        "uri": "\/administration\/dashboard",
        "ip": "157.119.186.250"
    },
    "php": {
        "version": "7.4.33",
        "interface": "cgi-fcgi"
    },
    "messages": {
        "count": 0,
        "messages": []
    },
    "time": {
        "start": 1679420120.6780240535736083984375,
        "end": 1679420120.77256298065185546875,
        "duration": 0.0945389270782470703125,
        "duration_str": "94.54ms",
        "measures": [{
            "label": "Booting",
            "start": 1679420120.6780240535736083984375,
            "relative_start": 0,
            "end": 1679420120.7369120121002197265625,
            "relative_end": 1679420120.7369120121002197265625,
            "duration": 0.058887958526611328125,
            "duration_str": "58.89ms",
            "params": [],
            "collector": null
        }, {
            "label": "Application",
            "start": 1679420120.73799991607666015625,
            "relative_start": 0.0599758625030517578125,
            "end": 1679420120.772563934326171875,
            "relative_end": 9.5367431640625e-7,
            "duration": 0.03456401824951171875,
            "duration_str": "34.56ms",
            "params": [],
            "collector": null
        }]
    },
    "memory": {
        "peak_usage": 18533920,
        "peak_usage_str": "18MB"
    },
    "exceptions": {
        "count": 0,
        "exceptions": []
    },
    "views": {
        "nb_templates": 5,
        "templates": [{
            "name": "admin.dashboard (resources\/views\/admin\/dashboard.blade.php)",
            "param_count": 0,
            "params": [],
            "type": "blade"
        }, {
            "name": "admin.include.master (resources\/views\/admin\/include\/master.blade.php)",
            "param_count": 4,
            "params": ["obLevel", "__env", "app", "errors"],
            "type": "blade"
        }, {
            "name": "admin.include.app (resources\/views\/admin\/include\/app.blade.php)",
            "param_count": 4,
            "params": ["obLevel", "__env", "app", "errors"],
            "type": "blade"
        }, {
            "name": "admin.include.header (resources\/views\/admin\/include\/header.blade.php)",
            "param_count": 4,
            "params": ["obLevel", "__env", "app", "errors"],
            "type": "blade"
        }, {
            "name": "admin.include.footer (resources\/views\/admin\/include\/footer.blade.php)",
            "param_count": 4,
            "params": ["obLevel", "__env", "app", "errors"],
            "type": "blade"
        }]
    },
    "route": {
        "uri": "GET administration\/dashboard",
        "middleware": "web, auth:administration",
        "as": "dashboard",
        "controller": "App\\Http\\Controllers\\AdminController@dashboard",
        "namespace": "App\\Http\\Controllers",
        "prefix": "\/administration",
        "where": [],
        "file": "app\/Http\/Controllers\/AdminController.php:21-27"
    },
    "queries": {
        "nb_statements": 1,
        "nb_failed_statements": 0,
        "accumulated_duration": 0.00225999999999999985622611831104222801513969898223876953125,
        "accumulated_duration_str": "2.26ms",
        "statements": [{
            "sql": "select * from `administrations` where `id` = 10 limit 1",
            "type": "query",
            "params": [],
            "bindings": ["10"],
            "hints": null,
            "backtrace": [{
                "index": 15,
                "namespace": null,
                "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/EloquentUserProvider.php",
                "line": 52
            }, {
                "index": 16,
                "namespace": null,
                "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/SessionGuard.php",
                "line": 131
            }, {
                "index": 17,
                "namespace": null,
                "name": "\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/GuardHelpers.php",
                "line": 60
            }, {
                "index": 18,
                "namespace": "middleware",
                "name": "auth",
                "line": 62
            }, {
                "index": 19,
                "namespace": "middleware",
                "name": "auth",
                "line": 41
            }],
            "duration": 0.00225999999999999985622611831104222801513969898223876953125,
            "duration_str": "2.26ms",
            "stmt_id": "\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/EloquentUserProvider.php:52",
            "connection": "chambalup_db"
        }]
    },
    "models": {
        "data": {
            "App\\Administration": 1
        },
        "count": 1
    },
    "swiftmailer_mails": {
        "count": 0,
        "mails": []
    },
    "gate": {
        "count": 0,
        "messages": []
    },
    "session": {
        "_token": "10mSyYRaR7D8sczeRePF9WpQ9n3lRbR8NiE4VVL4",
        "_previous": "array:1 [\n  \"url\" => \"http:\/\/chambalup.org\/administration\/dashboard\"\n]",
        "_flash": "array:2 [\n  \"old\" => []\n  \"new\" => []\n]",
        "login_administration_59ba36addc2b2f9401580f014c7f58ea4e30989d": "10",
        "PHPDEBUGBAR_STACK_DATA": "[]"
    },
    "request": {
        "path_info": "\/administration\/dashboard",
        "status_code": "<pre class=sf-dump id=sf-dump-1009654657 data-indent-pad=\"  \"><span class=sf-dump-num>200<\/span>\n<\/pre><script>Sfdump(\"sf-dump-1009654657\", {\"maxDepth\":0})<\/script>\n",
        "status_text": "OK",
        "format": "html",
        "content_type": "text\/html; charset=UTF-8",
        "request_query": "<pre class=sf-dump id=sf-dump-1454322977 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1454322977\", {\"maxDepth\":0})<\/script>\n",
        "request_request": "<pre class=sf-dump id=sf-dump-1080662126 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1080662126\", {\"maxDepth\":0})<\/script>\n",
        "request_headers": "<pre class=sf-dump id=sf-dump-2000247846 data-indent-pad=\"  \"><span class=sf-dump-note>array:10<\/span> [<samp>\n  \"<span class=sf-dump-key>accept<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.7<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-encoding<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"13 characters\">gzip, deflate<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-language<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">en-US,en;q=0.9<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">max-age=0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>connection<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"519 characters\">XSRF-TOKEN=eyJpdiI6InZQTXpOMlwvdHFMOGRwbWQ1RWtMMG9BPT0iLCJ2YWx1ZSI6InlJMDZLd0Q5YTl2enkwSFNudExzWU9TYTExc3NrbEk3cXQ3eGZOdm5IaVpqRE1LcVwvWmNZWWFwZ1pUM292UHVRIiwibWFjIjoiZWFlNGM2MWEyMTg1YzNkODJiZWJhMGQ2ZWYyMTk2NjdjMmUxMmM0ZGI5NjUyMWVmODgyNzQ1MTI1YjNlMjM4NCJ9; laravel_session=eyJpdiI6IkVDRyt1RDd0dDhydEtMQVk3UHRYdGc9PSIsInZhbHVlIjoiSlIrRFdtSzhYQXVcL0QrV1JBZTZHQXQwaXlhR3VjelZjbFNhUGFsSDhxQTFZYVJNYXNWY3pIeEhEdUVRRkdZak4iLCJtYWMiOiI2Zjg5Y2VjYWI2ZDlkMTBmNTk4NGIwYzhiNGY2NWVlNzJlMGJmNjNiNzc1YTg1NTdhNzdiYTRhMDFhNTYwN2UyIn0%3D<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>host<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"13 characters\">chambalup.org<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>referer<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"45 characters\">http:\/\/chambalup.org\/administration\/dashboard<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>upgrade-insecure-requests<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>user-agent<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"111 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/111.0.0.0 Safari\/537.36<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-2000247846\", {\"maxDepth\":0})<\/script>\n",
        "request_server": "<pre class=sf-dump id=sf-dump-1626030022 data-indent-pad=\"  \"><span class=sf-dump-note>array:44<\/span> [<samp>\n  \"<span class=sf-dump-key>CONTEXT_DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"27 characters\">\/home\/chambalup\/public_html<\/span>\"\n  \"<span class=sf-dump-key>CONTEXT_PREFIX<\/span>\" => \"\"\n  \"<span class=sf-dump-key>DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"27 characters\">\/home\/chambalup\/public_html<\/span>\"\n  \"<span class=sf-dump-key>GATEWAY_INTERFACE<\/span>\" => \"<span class=sf-dump-str title=\"7 characters\">CGI\/1.1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT<\/span>\" => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.7<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\/span>\" => \"<span class=sf-dump-str title=\"13 characters\">gzip, deflate<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">en-US,en;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CACHE_CONTROL<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">max-age=0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CONNECTION<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  \"<span class=sf-dump-key>HTTP_COOKIE<\/span>\" => \"<span class=sf-dump-str title=\"519 characters\">XSRF-TOKEN=eyJpdiI6InZQTXpOMlwvdHFMOGRwbWQ1RWtMMG9BPT0iLCJ2YWx1ZSI6InlJMDZLd0Q5YTl2enkwSFNudExzWU9TYTExc3NrbEk3cXQ3eGZOdm5IaVpqRE1LcVwvWmNZWWFwZ1pUM292UHVRIiwibWFjIjoiZWFlNGM2MWEyMTg1YzNkODJiZWJhMGQ2ZWYyMTk2NjdjMmUxMmM0ZGI5NjUyMWVmODgyNzQ1MTI1YjNlMjM4NCJ9; laravel_session=eyJpdiI6IkVDRyt1RDd0dDhydEtMQVk3UHRYdGc9PSIsInZhbHVlIjoiSlIrRFdtSzhYQXVcL0QrV1JBZTZHQXQwaXlhR3VjelZjbFNhUGFsSDhxQTFZYVJNYXNWY3pIeEhEdUVRRkdZak4iLCJtYWMiOiI2Zjg5Y2VjYWI2ZDlkMTBmNTk4NGIwYzhiNGY2NWVlNzJlMGJmNjNiNzc1YTg1NTdhNzdiYTRhMDFhNTYwN2UyIn0%3D<\/span>\"\n  \"<span class=sf-dump-key>HTTP_HOST<\/span>\" => \"<span class=sf-dump-str title=\"13 characters\">chambalup.org<\/span>\"\n  \"<span class=sf-dump-key>HTTP_REFERER<\/span>\" => \"<span class=sf-dump-str title=\"45 characters\">http:\/\/chambalup.org\/administration\/dashboard<\/span>\"\n  \"<span class=sf-dump-key>HTTP_UPGRADE_INSECURE_REQUESTS<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_USER_AGENT<\/span>\" => \"<span class=sf-dump-str title=\"111 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/111.0.0.0 Safari\/537.36<\/span>\"\n  \"<span class=sf-dump-key>PATH<\/span>\" => \"<span class=sf-dump-str title=\"13 characters\">\/bin:\/usr\/bin<\/span>\"\n  \"<span class=sf-dump-key>QUERY_STRING<\/span>\" => \"\"\n  \"<span class=sf-dump-key>REDIRECT_SCRIPT_URI<\/span>\" => \"<span class=sf-dump-str title=\"45 characters\">http:\/\/chambalup.org\/administration\/dashboard<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_SCRIPT_URL<\/span>\" => \"<span class=sf-dump-str title=\"25 characters\">\/administration\/dashboard<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_STATUS<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">200<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_UNIQUE_ID<\/span>\" => \"<span class=sf-dump-str title=\"27 characters\">ZBnq2ImYD0j9bTAG_873dwAAABc<\/span>\"\n  \"<span class=sf-dump-key>REDIRECT_URL<\/span>\" => \"<span class=sf-dump-str title=\"25 characters\">\/administration\/dashboard<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"15 characters\">157.119.186.250<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_PORT<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">59856<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_METHOD<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">GET<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_SCHEME<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">http<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_URI<\/span>\" => \"<span class=sf-dump-str title=\"25 characters\">\/administration\/dashboard<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_FILENAME<\/span>\" => \"<span class=sf-dump-str title=\"37 characters\">\/home\/chambalup\/public_html\/index.php<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_NAME<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\/index.php<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_URI<\/span>\" => \"<span class=sf-dump-str title=\"45 characters\">http:\/\/chambalup.org\/administration\/dashboard<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_URL<\/span>\" => \"<span class=sf-dump-str title=\"25 characters\">\/administration\/dashboard<\/span>\"\n  \"<span class=sf-dump-key>SERVER_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">148.72.158.178<\/span>\"\n  \"<span class=sf-dump-key>SERVER_ADMIN<\/span>\" => \"<span class=sf-dump-str title=\"23 characters\">webmaster@chambalup.org<\/span>\"\n  \"<span class=sf-dump-key>SERVER_NAME<\/span>\" => \"<span class=sf-dump-str title=\"13 characters\">chambalup.org<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PORT<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">80<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PROTOCOL<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">HTTP\/1.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_SIGNATURE<\/span>\" => \"\"\n  \"<span class=sf-dump-key>SERVER_SOFTWARE<\/span>\" => \"<span class=sf-dump-str title=\"6 characters\">Apache<\/span>\"\n  \"<span class=sf-dump-key>TZ<\/span>\" => \"<span class=sf-dump-str title=\"16 characters\">America\/New_York<\/span>\"\n  \"<span class=sf-dump-key>UNIQUE_ID<\/span>\" => \"<span class=sf-dump-str title=\"27 characters\">ZBnq2ImYD0j9bTAG_873dwAAABc<\/span>\"\n  \"<span class=sf-dump-key>PHP_SELF<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\/index.php<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\/span>\" => <span class=sf-dump-num>1679420120.678<\/span>\n  \"<span class=sf-dump-key>REQUEST_TIME<\/span>\" => <span class=sf-dump-num>1679420120<\/span>\n  \"<span class=sf-dump-key>argv<\/span>\" => []\n  \"<span class=sf-dump-key>argc<\/span>\" => <span class=sf-dump-num>0<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1626030022\", {\"maxDepth\":0})<\/script>\n",
        "request_cookies": "<pre class=sf-dump id=sf-dump-1672356092 data-indent-pad=\"  \"><span class=sf-dump-note>array:2<\/span> [<samp>\n  \"<span class=sf-dump-key>XSRF-TOKEN<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">10mSyYRaR7D8sczeRePF9WpQ9n3lRbR8NiE4VVL4<\/span>\"\n  \"<span class=sf-dump-key>laravel_session<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">NM63bzBUuBLkUBJkEKPN1DgX8GMlia17nQMCs8H1<\/span>\"\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1672356092\", {\"maxDepth\":0})<\/script>\n",
        "response_headers": "<pre class=sf-dump id=sf-dump-1596608022 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp>\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">no-cache, private<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>date<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Tue, 21 Mar 2023 17:35:20 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>content-type<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">text\/html; charset=UTF-8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>set-cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"320 characters\">XSRF-TOKEN=eyJpdiI6IkhwV2NTYlBXd1prUHBuYnJoNGY3RXc9PSIsInZhbHVlIjoiZmIyb1pINHd6b0dJNVBEN3FRTEtwbXF0bVF6TlZRNGlSaVliOGxsR1I3MmIrbHhjNmxaV2FyTE5UMGcyRTNFeSIsIm1hYyI6IjFkZmM0YjEwZjBhZTJiZjY5NmJlOGU3OWQyZDY4MDkyZWU2YmVjNDljOTI5NTk1OTA5MzIzNTAxYTlmMzNlNmYifQ%3D%3D; expires=Tue, 21-Mar-2023 19:35:20 GMT; Max-Age=7200; path=\/<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"333 characters\">laravel_session=eyJpdiI6Ik5NbFwvZU1JMU9ZKzJVdWtQNXl5NHZBPT0iLCJ2YWx1ZSI6InFVTXBweDNpM3huVEtxYzM1dGxabGF6SWtGRVVSQ3hsYXFBaW9aWjlBcm9QVE5EZytUcjlUUmplUGwrNGJheDkiLCJtYWMiOiJlYzgzZGYwYmJlY2UxMjg3MTM4NzFiNDAyODY2ZWI2YzljYWEzZjJmOWJiZTBiZjg0Njc2NTVkOTRhMGM1YWMxIn0%3D; expires=Tue, 21-Mar-2023 19:35:20 GMT; Max-Age=7200; path=\/; httponly<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>Set-Cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"306 characters\">XSRF-TOKEN=eyJpdiI6IkhwV2NTYlBXd1prUHBuYnJoNGY3RXc9PSIsInZhbHVlIjoiZmIyb1pINHd6b0dJNVBEN3FRTEtwbXF0bVF6TlZRNGlSaVliOGxsR1I3MmIrbHhjNmxaV2FyTE5UMGcyRTNFeSIsIm1hYyI6IjFkZmM0YjEwZjBhZTJiZjY5NmJlOGU3OWQyZDY4MDkyZWU2YmVjNDljOTI5NTk1OTA5MzIzNTAxYTlmMzNlNmYifQ%3D%3D; expires=Tue, 21-Mar-2023 19:35:20 GMT; path=\/<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"319 characters\">laravel_session=eyJpdiI6Ik5NbFwvZU1JMU9ZKzJVdWtQNXl5NHZBPT0iLCJ2YWx1ZSI6InFVTXBweDNpM3huVEtxYzM1dGxabGF6SWtGRVVSQ3hsYXFBaW9aWjlBcm9QVE5EZytUcjlUUmplUGwrNGJheDkiLCJtYWMiOiJlYzgzZGYwYmJlY2UxMjg3MTM4NzFiNDAyODY2ZWI2YzljYWEzZjJmOWJiZTBiZjg0Njc2NTVkOTRhMGM1YWMxIn0%3D; expires=Tue, 21-Mar-2023 19:35:20 GMT; path=\/; httponly<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1596608022\", {\"maxDepth\":0})<\/script>\n",
        "session_attributes": "<pre class=sf-dump id=sf-dump-838250595 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp>\n  \"<span class=sf-dump-key>_token<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">10mSyYRaR7D8sczeRePF9WpQ9n3lRbR8NiE4VVL4<\/span>\"\n  \"<span class=sf-dump-key>_previous<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp>\n    \"<span class=sf-dump-key>url<\/span>\" => \"<span class=sf-dump-str title=\"45 characters\">http:\/\/chambalup.org\/administration\/dashboard<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>_flash<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp>\n    \"<span class=sf-dump-key>old<\/span>\" => []\n    \"<span class=sf-dump-key>new<\/span>\" => []\n  <\/samp>]\n  \"<span class=sf-dump-key>login_administration_59ba36addc2b2f9401580f014c7f58ea4e30989d<\/span>\" => <span class=sf-dump-num>10<\/span>\n  \"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\/span>\" => []\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-838250595\", {\"maxDepth\":0})<\/script>\n"
    }
}, "X3e58bdd861027a83aa8193f977de793a");