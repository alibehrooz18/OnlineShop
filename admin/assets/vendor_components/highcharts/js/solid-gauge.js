/*
 Highcharts JS v8.2.0 (2020-08-20)

 Solid angular gauge module

 (c) 2010-2019 Torstein Honsi

 License: www.highcharts.com/license
*/
(function(a) {
    "object" === typeof module && module.exports ? (a["default"] = a, module.exports = a) : "function" === typeof define && define.amd ? define("highcharts/modules/solid-gauge", ["highcharts", "highcharts/highcharts-more"], function(g) {
        a(g);
        a.Highcharts = g;
        return a
    }) : a("undefined" !== typeof Highcharts ? Highcharts : void 0)
})(function(a) {
    function g(a, r, g, c) {
        a.hasOwnProperty(r) || (a[r] = c.apply(null, g))
    }
    a = a ? a._modules : {};
    g(a, "Series/SolidGaugeSeries.js", [a["Core/Color.js"], a["Core/Globals.js"], a["Mixins/LegendSymbol.js"],
        a["Core/Utilities.js"]
    ], function(a, g, x, c) {
        var k = a.parse,
            r = c.clamp,
            u = c.extend,
            v = c.isNumber,
            y = c.merge,
            t = c.pick,
            w = c.pInt;
        a = c.seriesType;
        c = c.wrap;
        c(g.Renderer.prototype.symbols, "arc", function(e, a, l, b, z, d) {
            e = e(a, l, b, z, d);
            d.rounded && (b = ((d.r || b) - (d.innerR || 0)) / 2, a = e[0], d = e[2], "M" === a[0] && "L" === d[0] && (a = ["A", b, b, 0, 1, 1, a[1], a[2]], e[2] = ["A", b, b, 0, 1, 1, d[1], d[2]], e[4] = a));
            return e
        });
        var m;
        (function(a) {
            var e = {
                initDataClasses: function(a) {
                    var e = this.chart,
                        l, d = 0,
                        h = this.options;
                    this.dataClasses = l = [];
                    a.dataClasses.forEach(function(b,
                        f) {
                        b = y(b);
                        l.push(b);
                        b.color || ("category" === h.dataClassColor ? (f = e.options.colors, b.color = f[d++], d === f.length && (d = 0)) : b.color = k(h.minColor).tweenTo(k(h.maxColor), f / (a.dataClasses.length - 1)))
                    })
                },
                initStops: function(a) {
                    this.stops = a.stops || [
                        [0, this.options.minColor],
                        [1, this.options.maxColor]
                    ];
                    this.stops.forEach(function(a) {
                        a.color = k(a[1])
                    })
                },
                toColor: function(a, e) {
                    var b = this.stops,
                        d = this.dataClasses,
                        h;
                    if (d)
                        for (h = d.length; h--;) {
                            var c = d[h];
                            var f = c.from;
                            b = c.to;
                            if (("undefined" === typeof f || a >= f) && ("undefined" ===
                                    typeof b || a <= b)) {
                                var g = c.color;
                                e && (e.dataClass = h);
                                break
                            }
                        } else {
                            this.logarithmic && (a = this.val2lin(a));
                            a = 1 - (this.max - a) / (this.max - this.min);
                            for (h = b.length; h-- && !(a > b[h][0]););
                            f = b[h] || b[h + 1];
                            b = b[h + 1] || f;
                            a = 1 - (b[0] - a) / (b[0] - f[0] || 1);
                            g = f.color.tweenTo(b.color, a)
                        }
                    return g
                }
            };
            a.init = function(a) {
                u(a, e)
            }
        })(m || (m = {}));
        a("solidgauge", "gauge", {
            colorByPoint: !0,
            dataLabels: {
                y: 0
            }
        }, {
            drawLegendSymbol: x.drawRectangle,
            translate: function() {
                var a = this.yAxis;
                m.init(a);
                !a.dataClasses && a.options.dataClasses && a.initDataClasses(a.options);
                a.initStops(a.options);
                g.seriesTypes.gauge.prototype.translate.call(this)
            },
            drawPoints: function() {
                var a = this,
                    c = a.yAxis,
                    g = c.center,
                    b = a.options,
                    m = a.chart.renderer,
                    d = b.overshoot,
                    h = v(d) ? d / 180 * Math.PI : 0,
                    k;
                v(b.threshold) && (k = c.startAngleRad + c.translate(b.threshold, null, null, null, !0));
                this.thresholdAngleRad = t(k, c.startAngleRad);
                a.points.forEach(function(f) {
                    if (!f.isNull) {
                        var d = f.graphic,
                            e = c.startAngleRad + c.translate(f.y, null, null, null, !0),
                            k = w(t(f.options.radius, b.radius, 100)) * g[2] / 200,
                            n = w(t(f.options.innerRadius,
                                b.innerRadius, 60)) * g[2] / 200,
                            p = c.toColor(f.y, f),
                            q = Math.min(c.startAngleRad, c.endAngleRad),
                            l = Math.max(c.startAngleRad, c.endAngleRad);
                        "none" === p && (p = f.color || a.color || "none");
                        "none" !== p && (f.color = p);
                        e = r(e, q - h, l + h);
                        !1 === b.wrap && (e = r(e, q, l));
                        q = Math.min(e, a.thresholdAngleRad);
                        e = Math.max(e, a.thresholdAngleRad);
                        e - q > 2 * Math.PI && (e = q + 2 * Math.PI);
                        f.shapeArgs = n = {
                            x: g[0],
                            y: g[1],
                            r: k,
                            innerR: n,
                            start: q,
                            end: e,
                            rounded: b.rounded
                        };
                        f.startR = k;
                        d ? (k = n.d, d.animate(u({
                            fill: p
                        }, n)), k && (n.d = k)) : f.graphic = d = m.arc(n).attr({
                            fill: p,
                            "sweep-flag": 0
                        }).add(a.group);
                        a.chart.styledMode || ("square" !== b.linecap && d.attr({
                            "stroke-linecap": "round",
                            "stroke-linejoin": "round"
                        }), d.attr({
                            stroke: b.borderColor || "none",
                            "stroke-width": b.borderWidth || 0
                        }));
                        d && d.addClass(f.getClassName(), !0)
                    }
                })
            },
            animate: function(a) {
                a || (this.startAngleRad = this.thresholdAngleRad, g.seriesTypes.pie.prototype.animate.call(this, a))
            }
        });
        "";
        return m
    });
    g(a, "masters/modules/solid-gauge.src.js", [], function() {})
});
//# sourceMappingURL=solid-gauge.js.map