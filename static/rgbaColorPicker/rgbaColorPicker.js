/* Menucool rgba Color Picker v2018.9.23. menucool.com/rgba-color-picker */
var MenuCoolRgbaColorPickerOptions = {initOnPageLoad: false}, rgbaColorPicker = function (y){
	"use strict";
	var e = function (a, b, c){
			if (a.addEventListener) a.addEventListener(b, c, false); else if (a.attachEvent) a.attachEvent("on" + b, c); else a["on" + b] = c
		}, x = function (a){
			if (!a) return 0;
			var b = /\bcolor\b/;
			return b.test(a)
		}, g = "length", o = function (a){
			return document.createElement(a)
		}, u = function (c){
			var b = 0;
			if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(c)){
				var a = c.substring(1).split("");
				if (a[g] == 3) a = [a[0], a[0], a[1], a[1], a[2], a[2]];
				a = "0x" + a.join("");
				b = [a >> 16 & 255, a >> 8 & 255, a & 255]
			}
			return b
		}, s = function (c, b){
			var a = u(c);
			return a ? "rgba(" + a.join(",") + "," + b + ")" : m
		}, w = function (h, f){
			var e = "", b = h.match(/rgba\((\d+),(\d+),(\d+),([.\d]+)/i);
			if (b){
				for (var g = u(f), c = [], d = +b[4], a = 0; a < 3; a++) c.push(Math.floor(+b[a + 1] * d + +g[a] * (1 - d)));
				e = j(c.join(","))
			}
			return e
		}, p = function (b){
			var a = b.toString(16).toUpperCase();
			return a[g] == 1 ? "0" + a : a
		}, j = function (b){
			var a = b.split(",");
			return "#" + p(+a[0]) + p(+a[1]) + p(+a[2])
		}, r = function (c){
			for (var b = c.split(","), a = 0; a < b[g]; a++) if (+b[a] < 0 || +b[a] > 255) return 0;
			return 1
		}, A = navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false, h = A ? "touchstart" : "click",
		k = "className", c = "style", d = "backgroundColor", l = "display", b = "value", m = "invalid",
		f = "appendChild", n = "transparent", B = "undefined", z = function (a){
			if (window.getComputedStyle) var b = window.getComputedStyle(a, null); else if (a.currentStyle) b = a.currentStyle; else b = a[c];
			return b
		}, a, i, q = function (){
			if (a){
				if (+a.w[b] == 1) var d = a.a[b]; else d = a.v[b];
				a.R[a.i][b] = d;
				a.R[a.i].onchange();
				a.r[c][l] = "none";
				typeof OnColorChanged !== "undefined" && OnColorChanged(d, a.R[a.i].id)
			}
		}, v = function (){
			var a = this;
			a.a = a.b = a.c = a.e = null;
			a.i = -1;
			a.R = [];
			a.S = [];
			a.d()
		};
	v.prototype = {
		f: function (a){
			var b = o("div");
			if (!a){
				a = this.r;
				b[k] = "separator"
			} else b[k] = "clear";
			a[f](b)
		}, g: function (b, e, f){
			var a = o("div");
			if (b == "TT"){
				a[k] = "transChooser";
				a.setAttribute("rgb", n)
			} else{
				a[c][d] = "#" + b + f + e;
				a.setAttribute("rgb", "#" + b + f + e)
			}
			return a
		}, h: function (a){
			a = a ? a : window.event;
			a.cancelBubble = true;
			a.h && a.h()
		}, j: function (){
			for (var a = this, c, b = a.e, j = ["00", "11", "22", "33", "44", "55", "66", "77", "88", "99", "AA", "BB", "CC", "DD", "EE", "F6", "FF", "TT"], i = 0; i < 18; i++){
				c = a.g(j[i], j[i], j[i]);
				b[f](c)
			}
			a.f(b);
			for (var e = ["00", "33", "66", "99", "CC", "FF"], d = 0; d < 6; d++){
				for (var h = 0; h < 3; h++) for (var g = 0; g < 6; g++){
					c = a.g(e[h], e[g], e[d]);
					b[f](c)
				}
				a.f(b)
			}
			a.f(b);
			for (var d = 0; d < 6; d++){
				for (var h = 3; h < 6; h++) for (var g = 0; g < 6; g++){
					c = a.g(e[h], e[g], e[d]);
					b[f](c)
				}
				a.f(b)
			}
		}, k: function (c, d){
			var b;
			switch (d){
				case 1:
					b = "span";
					break;
				case 2:
				case 3:
					b = "input";
					break;
				case 4:
					b = "button";
					break;
				default:
					b = "div"
			}
			var a = o(b);
			if (c[0] == "#") a.id = c.substring(1); else a[k] = c;
			if (d == 2){
				a.type = "text";
				a.setAttribute("spellcheck", "false")
			} else if (d == 3) a.type = "range";
			c != "#colorpicker" && c != "colorChooser" && this.r[f](a);
			return a
		}, d: function (){
			var a = this;
			a.r = a.k("#colorpicker");
			e(a.r, h, a.h);
			a.b = a.k("w1");
			a.c = a.k("w2");
			a.f();
			a.a = a.k("w1", 2);
			a.v = a.k("w2", 2);
			a.f();
			var d = a.k("btnOK", 4);
			d.setAttribute("type", "button");
			d.innerHTML = "OK";
			var f = a.k("opacitySpan", 1);
			f.innerHTML = "Opacity";
			a.w = a.k("rgbaRange", 3);
			a.f();
			a.e = a.k("#colorContainer");
			e(a.e, "mouseover", function (b){
				a.m(b, 1)
			});
			e(a.e, "mouseout", function (b){
				a.m(b, 2)
			});
			e(a.e, h, function (b){
				a.m(b, 3)
			});
			a.w[b] = 1;
			a.w.min = 0;
			a.w.max = 1;
			a.w.step = .1;
			e(a.w, "input", function (){
				a.t(a.a[b])
			});
			a.j();
			a.o();
			e(document.documentElement, h, function (){
				a.r[c][l] = "none"
			});
			e(d, h, q)
		}, m: function (d, e){
			if (e == 2) var b = i; else{
				if (d.target) var c = d.target; else c = d.srcElement;
				if (c.id != "colorContainer"){
					b = c.getAttribute("rgb");
					if (e == 3){
						i = b;
						q()
					}
				}
			}
			b && a.t(b)
		}, o: function (){
			for (var m = document.getElementsByTagName("input"), a = this, j = 0; j < m[g]; j++) if (x(m[j][k])){
				var i = a.R[g];
				a.R[i] = m[j];
				a.R[i].i = i;
				a.S[i] = a.k("colorChooser", 1);
				a.S[i].i = i;
				a.R[i].parentNode.insertBefore(a.S[i], a.R[i].nextSibling);
				a.S[i][c][d] = a.R[i][b];
				e(a.S[i], h, function (b){
					if (a.r.parentNode == this && a.r[c][l] == "block") a.r[c][l] = "none"; else{
						a.i = this.i;
						this[f](a.r)[c][l] = "block";
						a.s()
					}
					a.h(b)
				});
				a.R[i].onchange = function (){
					a.S[this.i][c][d] = this[b]
				};
				typeof OnColorChanged !== "undefined" && OnColorChanged(a.R[i][b], a.R[i].id)
			}
		}, s: function (){
			var a = this, e = a.x(a.R[a.i][b]);
			i = e[0];
			a.w[b] = e[g] == 2 ? e[1] : 1;
			if (i == m){
				a.b[c][d] = a.c[c][d] = n;
				a.a[b] = a.v[b] = m
			} else a.t(i)
		}, x: function (a){
			a = a.replace(/\s+/g, "").toLowerCase();
			var e = [m];
			if (!a || a == n) e = [a]; else if (a[0] == "#"){
				if (/^#([a-f0-9]{3}){1,2}$/.test(a)) e = [a]
			} else if (/^rgba\(\d+,\d+,\d+,[\.\d]+\)$/.test(a)){
				var b = a.match(/^rgba\((\d+,\d+,\d+),([\.\d]+)\)$/);
				if (b) if (r(b[1]) && +b[2] <= 1) e = [j(b[1]), +b[2]]
			} else if (/^rgb\(\d+,\d+,\d+\)$/.test(a)){
				var b = a.match(/^rgb\((\d+,\d+,\d+)\)$/);
				if (r(b[1])) e = [j(b[1])]
			} else{
				var f = this.b;
				f[c][d] = n;
				f[c][d] = a;
				var g = z(f)[d];
				if (g.indexOf("rgb(") != -1) e = [j(g.replace("rgb(", "").replace(")", ""))]
			}
			return e
		}, t: function (e){
			var f = +a.w[b];
			a.b[c][d] = a.a[b] = e && e[0] == "#" ? e.toUpperCase() : e;
			a.c[c][d] = a.v[b] = e && e[0] == "#" ? s(e, f) : e
		}
	};
	var t = function (){
		if (!a) a = new v
	};
	y.initOnPageLoad && e(window, "load", t);
	return {hexAlphaToRgba: s, rgbToHex: j, rgbaToHex: w, init: t}
}(MenuCoolRgbaColorPickerOptions)