/**
 * @version: 1.3.5
 * @author: Dan Grossman http://www.dangrossman.info/
 * @date: 2014-03-19
 * @copyright: Copyright (c) 2012-2014 Dan Grossman. All rights reserved.
 * @license: Licensed under Apache License v2.0. See http://www.apache.org/licenses/LICENSE-2.0
 * @website: http://www.improvely.com/
 */
!function(b, c) {
  var a = function(g, f, d) {
    this.parentEl = "body";
    this.element = b(g);
    var e = '<div class="daterangepicker dropdown-menu">' +
		'<div class="daterangepicker_outerCalDiv">'+
				'<div class="daterangepicker_calLeft">'+
				'<div class="daterangepicker_start_input">' +
                      '<label for="daterangepicker_start"></label>' +
                      '<input class="input-mini" type="text" name="daterangepicker_start" disabled="disabled" value="" />' +
                    '</div>' +
                '<div class="calendar left "></div>' +
				'</div>'+
				'<div class="daterangepicker_calRight">'+
				'<div class="daterangepicker_end_input">' +
                      '<label for="daterangepicker_end"></label>' +
                      '<input class="input-mini" type="text" name="daterangepicker_end" disabled="disabled" value="" />' +
                    '</div>' +
                '<div class="calendar right"></div>' +
				'</div>'+
				'</div>'+
                '<div class="ranges">' +
                  '<div class="range_inputs">' + 
                   '<button class="applyBtn" disabled="disabled"></button>&nbsp;' +
                    '<button class="cancelBtn"></button>' +
                  '</div>' +
                '</div>' +
              '</div>';
    if (typeof f !== "object" || f === null) {
      f = {}
    }
    this.parentEl = (typeof f === "object" && f.parentEl && b(f.parentEl).length) || b(this.parentEl);
    this.container = b(e).appendTo(this.parentEl);
    this.setOptions(f, d);
    var h = this.container;
    b.each(this.buttonClasses, function(i, j) {
      h.find("button").addClass(j)
    });
    this.container.find(".daterangepicker_start_input label").html(this.locale.fromLabel);
    this.container.find(".daterangepicker_end_input label").html(this.locale.toLabel);
    if (this.applyClass.length) {
      this.container.find(".applyBtn").addClass(this.applyClass)
    }
    if (this.cancelClass.length) {
      this.container.find(".cancelBtn").addClass(this.cancelClass)
    }
    this.container.find(".applyBtn").html(this.locale.applyLabel);
    this.container.find(".cancelBtn").html(this.locale.cancelLabel);
    this.container.find(".calendar").on("click.daterangepicker", ".prev", b.proxy(this.clickPrev, this)).on("click.daterangepicker", ".next", b.proxy(this.clickNext, this)).on("click.daterangepicker", "td.available", b.proxy(this.clickDate, this)).on("mouseenter.daterangepicker", "td.available", b.proxy(this.enterDate, this)).on("mouseleave.daterangepicker", "td.available", b.proxy(this.updateFormInputs, this)).on("change.daterangepicker", "select.yearselect", b.proxy(this.updateMonthYear, this)).on("change.daterangepicker", "select.monthselect", b.proxy(this.updateMonthYear, this)).on("change.daterangepicker", "select.hourselect,select.minuteselect,select.ampmselect", b.proxy(this.updateTime, this));
    this.container.find(".ranges").on("click.daterangepicker", "button.applyBtn", b.proxy(this.clickApply, this)).on("click.daterangepicker", "button.cancelBtn", b.proxy(this.clickCancel, this)).on("click.daterangepicker", ".daterangepicker_start_input,.daterangepicker_end_input", b.proxy(this.showCalendars, this)).on("click.daterangepicker", "li", b.proxy(this.clickRange, this)).on("mouseenter.daterangepicker", "li", b.proxy(this.enterRange, this)).on("mouseleave.daterangepicker", "li", b.proxy(this.updateFormInputs, this));
    if (this.element.is("input")) {
      this.element.on({
        "click.daterangepicker": b.proxy(this.show, this),
        "focus.daterangepicker": b.proxy(this.show, this),
        "keyup.daterangepicker": b.proxy(this.updateFromControl, this)
      })
      this.move();
    } else {
      this.element.on("click.daterangepicker", b.proxy(this.toggle, this))
    }   
  };
  a.prototype = {
    constructor: a,
    setOptions: function(n, m) {
      this.startDate = c().startOf("day");
      this.endDate = c().endOf("day");    
      this.minDate = false;
      this.maxDate = false;
      this.dateLimit = false;
      this.showDropdowns = false;
      this.showWeekNumbers = false;
      this.timePicker = false;
      this.timePickerIncrement = 30;
      this.timePicker12Hour = true;
      this.singleDatePicker = false;
      this.ranges = {};
      this.opens = "right";
      if (this.element.hasClass("pull-right")) {
        this.opens = "left";
      }
      this.buttonClasses = ["btn", "btn-small"];
      this.applyClass = "btn-success";
      this.cancelClass = "btn-default";
      this.format = "MM/DD/YYYY";
      this.separator = " - ";
      this.locale = {
        applyLabel: "Apply",
        cancelLabel: "Cancel",
        fromLabel: "From",
        toLabel: "To",
        weekLabel: "W",
        customRangeLabel: "Custom Range",
        daysOfWeek: c()._lang._weekdaysMin.slice(),
        monthNames: c()._lang._monthsShort.slice(),
        firstDay: 0
      };
      this.cb = function() {
      };
      if (typeof n.format === "string") {
        this.format = n.format
      }
      if (typeof n.separator === "string") {
        this.separator = n.separator
      }
      if (typeof n.startDate === "string") {
        this.startDate = c(n.startDate, this.format)
      }
      if (typeof n.endDate === "string") {
        this.endDate = c(n.endDate, this.format)
      }
      if (typeof n.minDate === "string") {
        this.minDate = c(n.minDate, this.format)
      }
      if (typeof n.maxDate === "string") {
        this.maxDate = c(n.maxDate, this.format)
      }
      if (typeof n.startDate === "object") {
        this.startDate = c(n.startDate)
      }
      if (typeof n.endDate === "object") {
        this.endDate = c(n.endDate)
      }
      if (typeof n.minDate === "object") {
        this.minDate = c(n.minDate)
      }
      if (typeof n.maxDate === "object") {
        this.maxDate = c(n.maxDate)
      }
      if (typeof n.applyClass === "string") {
        this.applyClass = n.applyClass
      }
      if (typeof n.cancelClass === "string") {
        this.cancelClass = n.cancelClass
      }
      if (typeof n.dateLimit === "object") {
        this.dateLimit = n.dateLimit
      }
      if (typeof n.locale === "object") {
        if (typeof n.locale.daysOfWeek === "object") {
          this.locale.daysOfWeek = n.locale.daysOfWeek.slice()
        }
        if (typeof n.locale.monthNames === "object") {
          this.locale.monthNames = n.locale.monthNames.slice()
        }
        if (typeof n.locale.firstDay === "number") {
          this.locale.firstDay = n.locale.firstDay;
          var h = n.locale.firstDay;
          while (h > 0) {
            this.locale.daysOfWeek.push(this.locale.daysOfWeek.shift());
            h--
          }
        }
        if (typeof n.locale.applyLabel === "string") {
          this.locale.applyLabel = n.locale.applyLabel
        }
        if (typeof n.locale.cancelLabel === "string") {
          this.locale.cancelLabel = n.locale.cancelLabel
        }
        if (typeof n.locale.fromLabel === "string") {
          this.locale.fromLabel = n.locale.fromLabel
        }
        if (typeof n.locale.toLabel === "string") {
          this.locale.toLabel = n.locale.toLabel
        }
        if (typeof n.locale.weekLabel === "string") {
          this.locale.weekLabel = n.locale.weekLabel
        }
        if (typeof n.locale.customRangeLabel === "string") {
          this.locale.customRangeLabel = n.locale.customRangeLabel
        }
      }
      if (typeof n.opens === "string") {
        this.opens = n.opens;
      }
      if (typeof n.showWeekNumbers === "boolean") {
        this.showWeekNumbers = n.showWeekNumbers;
      }
      if (typeof n.buttonClasses === "string") {
        this.buttonClasses = [n.buttonClasses]
      }
      if (typeof n.buttonClasses === "object") {
        this.buttonClasses = n.buttonClasses
      }
      if (typeof n.showDropdowns === "boolean") {
        this.showDropdowns = n.showDropdowns;
      }
      if (typeof n.singleDatePicker === "boolean") {
        this.singleDatePicker = n.singleDatePicker;
      }
      if (typeof n.timePicker === "boolean") {
        this.timePicker = n.timePicker;
      }
      if (typeof n.timePickerIncrement === "number") {
        this.timePickerIncrement = n.timePickerIncrement
      }
      if (typeof n.timePicker12Hour === "boolean") {
        this.timePicker12Hour = n.timePicker12Hour;
      }
      var d, g, i;
      if (typeof n.startDate === "undefined" && typeof n.endDate === "undefined") {
        if (b(this.element).is("input[type=text]")) {
          var e = b(this.element).val();
          var k = e.split(this.separator);
          d = g = null;
          if (k.length === 2) {
            d = c(k[0], this.format);
            g = c(k[1], this.format)
          } else {
            if (this.singleDatePicker) {
              d = c(e, this.format);
              g = c(e, this.format)
            }
          }
          if (d !== null && g !== null) {
            this.startDate = d;
            this.endDate = g;
          }
        }
      }
      if (typeof n.ranges === "object") {
        for (i in n.ranges) {
          d = c(n.ranges[i][0]);
          g = c(n.ranges[i][1]);
          if (this.minDate && d.isBefore(this.minDate)) {
            d = c(this.minDate);
          }
          if (this.maxDate && g.isAfter(this.maxDate)) {
            g = c(this.maxDate);
          }
          if ((this.minDate && g.isBefore(this.minDate)) || (this.maxDate && d.isAfter(this.maxDate))) {
            continue
          }
          this.ranges[i] = [d, g]
        }
        var j = "<ul>";
        for (i in this.ranges) {
          j += "<li>" + i + "</li>"
        }
        j += "<li>" + this.locale.customRangeLabel + "</li>";
        j += "</ul>";
        this.container.find(".ranges ul").remove();
        this.container.find(".ranges").prepend(j)
      }
      if (typeof m === "function") {
        this.cb = m
      }
      if (!this.timePicker) {
        this.startDate = this.startDate.startOf("day");
        this.endDate = this.endDate.endOf("day")
      }
      if (this.singleDatePicker) {
        this.opens = "right";
        this.container.find(".calendar.right").show();
        this.container.find(".calendar.left").hide();
        this.container.find(".ranges").hide();
        if (!this.container.find(".calendar.right").hasClass("single")) {
          this.container.find(".calendar.right").addClass("single")
        }
      } else {
        this.container.find(".calendar.right").removeClass("single");
        this.container.find(".ranges").show();
      }
      this.oldStartDate = this.startDate.clone();
      this.oldEndDate = this.endDate.clone();
      this.oldChosenLabel = this.chosenLabel;
      this.leftCalendar = {
        month: c([this.startDate.year(), this.startDate.month(), 1, this.startDate.hour(), this.startDate.minute()]),
        calendar: []
      };
      this.rightCalendar = {
        month: c([this.endDate.year(), this.endDate.month(), 1, this.endDate.hour(), this.endDate.minute()]),
        calendar: []
      };
      if (this.opens == "right") {
        var f = this.container.find(".calendar.left");
        var l = this.container.find(".calendar.right");
        f.removeClass("left").addClass("right");
        l.removeClass("right").addClass("left")
      }
      if (typeof n.ranges === "undefined" && !this.singleDatePicker) {
        this.container.addClass("show-calendar")
      }
      this.container.addClass("opens" + this.opens);
      this.updateView();
      this.updateCalendars()
    },
    setStartDate: function(d) {
      if (typeof d === "string") {
        this.startDate = c(d, this.format)
      }
      if (typeof d === "object") {
        this.startDate = c(d)
      }
      if (!this.timePicker) {
        this.startDate = this.startDate.startOf("day")
      }
      this.oldStartDate = this.startDate.clone();
      this.updateView();
      this.updateCalendars();

    },
    setEndDate: function(d) {
      if (typeof d === "string") {
        this.endDate = c(d, this.format)
      }
      if (typeof d === "object") {
        this.endDate = c(d)
      }
      if (!this.timePicker) {
        this.endDate = this.endDate.endOf("day")
      }
      this.oldEndDate = this.endDate.clone();
      this.updateView();
      this.updateCalendars()
    },
    updateView: function() {
      this.leftCalendar.month.month(this.startDate.month()).year(this.startDate.year());
      this.rightCalendar.month.month(this.endDate.month()).year(this.endDate.year());
      this.updateFormInputs()
    },
    updateFormInputs: function() {
      this.container.find("input[name=daterangepicker_start]").val(this.startDate.format(this.format));
      this.container.find("input[name=daterangepicker_end]").val(this.endDate.format(this.format));
      // this.element.val(this.startDate.format(this.format) + this.separator + this.endDate.format(this.format));

      //this.updateInputText();
      // console.log('start date...'+this.startDate.format(this.format));
      //console.log('end date...'+this.endDate.format(this.format));

      if (this.startDate.isSame(this.endDate) || this.startDate.isBefore(this.endDate)) {
        this.container.find("button.applyBtn").removeAttr("disabled");
      } else {
        this.container.find("button.applyBtn").attr("disabled", "disabled");
      }
    },
    updateFromControl: function() {
      if (!this.element.is("input")) {
        return
      }
      if (!this.element.val().length) {
        return
      }
      var e = this.element.val().split(this.separator);
      var f = c(e[0], this.format);
      var d = c(e[1], this.format);
      if (this.singleDatePicker) {
        f = c(this.element.val(), this.format);
        d = f
      }
      if (d.isBefore(f)) {
        return
      }
      this.oldStartDate = this.startDate.clone();
      this.oldEndDate = this.endDate.clone();
      this.startDate = f;
      this.endDate = d;
      if (!this.startDate.isSame(this.oldStartDate) || !this.endDate.isSame(this.oldEndDate)) {
        this.notify()
      }
      this.updateCalendars()
    },
    notify: function() {
      this.updateView();
      this.cb(this.startDate, this.endDate, this.chosenLabel)
    },
    move: function() {
      var d = {
        top: 0,
        left: 0
      };
      if (!this.parentEl.is("body")) {
        d = {
          top: this.parentEl.offset().top - this.parentEl.scrollTop(),
          left: this.parentEl.offset().left - this.parentEl.scrollLeft()
        }
      }
      if (this.opens == "left") {
        this.container.css({
          top: this.element.offset().top + this.element.outerHeight() - d.top,
          right: b(window).width() - this.element.offset().left - this.element.outerWidth() - d.left,
          left: "auto"
        });
        if (this.container.offset().left < 0) {
          this.container.css({
            right: "auto",
            left: 9
          })
        }
      } else {
        this.container.css({
          top: this.element.offset().top + this.element.outerHeight() - d.top,
          left: this.element.offset().left - d.left,
          right: "auto"
        });
        if (this.container.offset().left + this.container.outerWidth() > b(window).width()) {
          this.container.css({
            left: "auto",
            right: 0
          })
        }
      }
    },
    toggle: function(d) {
      if (this.element.hasClass("active")) {
        this.hide()
      } else {
        this.show();
      }
    },
    show: function(d) {
      this.element.addClass("active");
      this.container.show();
      this.move();
      b(document).on("click.daterangepicker", b.proxy(this.outsideClick, this));
      b(document).on("click.daterangepicker", "[data-toggle=dropdown]", b.proxy(this.outsideClick, this));
      this.element.trigger("show.daterangepicker", this)
    },
    outsideClick: function(f) {
      var d = b(f.target);
      if (d.closest(this.element).length || d.closest(this.container).length || d.closest(".calendar-date").length) {
        return
      }
      this.hide()
    },
    hide: function(d) {
      this.element.removeClass("active");
      this.container.hide();
      if (!this.startDate.isSame(this.oldStartDate) || !this.endDate.isSame(this.oldEndDate)) {
        this.notify()
      }
      this.oldStartDate = this.startDate.clone();
      this.oldEndDate = this.endDate.clone();
      b(document).off("click.daterangepicker", this.outsideClick);
      this.element.trigger("hide.daterangepicker", this)
    },
    enterRange: function(g) {
      var d = g.target.innerHTML;
      if (d == this.locale.customRangeLabel) {
        this.updateView()
      } else {
        var f = this.ranges[d];
        this.container.find("input[name=daterangepicker_start]").val(f[0].format(this.format));
        this.container.find("input[name=daterangepicker_end]").val(f[1].format(this.format))
      }
    },
    showCalendars: function() {
      this.container.addClass("show-calendar");
      this.move()
    },
    hideCalendars: function() {
      this.container.removeClass("show-calendar")
    },
    updateInputText: function() {
      if (this.element.is("input") && !this.singleDatePicker) {
        this.element.val(this.startDate.format(this.format) + this.separator + this.endDate.format(this.format));
      } else {
        if (this.element.is("input")) {
          this.element.val(this.startDate.format(this.format));
        }
      }

    },
    clickRange: function(g) {
      var d = g.target.innerHTML;
      this.chosenLabel = d;
      if (d == this.locale.customRangeLabel) {
        this.showCalendars()
      } else {
        var f = this.ranges[d];
        this.startDate = f[0];
        this.endDate = f[1];
        if (!this.timePicker) {
          this.startDate.startOf("day");
          this.endDate.endOf("day")
        }
        this.leftCalendar.month.month(this.startDate.month()).year(this.startDate.year()).hour(this.startDate.hour()).minute(this.startDate.minute());
        this.rightCalendar.month.month(this.endDate.month()).year(this.endDate.year()).hour(this.endDate.hour()).minute(this.endDate.minute());
        this.updateCalendars();
        this.updateInputText();
        this.hideCalendars();
        this.hide();
        this.element.trigger("apply.daterangepicker", this);
        console.log('click range..');
      }
    },
    clickPrev: function(f) {
      var d = b(f.target).parents(".calendar");
      if (d.hasClass("left")) {
        this.leftCalendar.month.subtract("month", 1)
      } else {
        this.rightCalendar.month.subtract("month", 1)
      }
      this.updateCalendars()
    },
    clickNext: function(f) {
      var d = b(f.target).parents(".calendar");
      if (d.hasClass("left")) {
        this.leftCalendar.month.add("month", 1)
      } else {
        this.rightCalendar.month.add("month", 1)
      }
      this.updateCalendars()
    },
    enterDate: function(g) {
      var i = b(g.target).attr("data-title");
      var h = i.substr(1, 1);
      var d = i.substr(3, 1);
      var f = b(g.target).parents(".calendar");
      if (f.hasClass("left")) {
        this.container.find("input[name=daterangepicker_start]").val(this.leftCalendar.calendar[h][d].format(this.format));
      } else {
        this.container.find("input[name=daterangepicker_end]").val(this.rightCalendar.calendar[h][d].format(this.format));
      }

      this.updateInputText();/*Modified by suryadev..*/
      //console.log('onhover this function is trigger....');
    },
    clickDate: function(l) {
      var m = b(l.target).attr("data-title");
      var n = m.substr(1, 1);
      var h = m.substr(3, 1);
      var f = b(l.target).parents(".calendar");
      var g, k;
      if (f.hasClass("left")) {
        g = this.leftCalendar.calendar[n][h];
        k = this.endDate;
        if (typeof this.dateLimit === "object") {
          var d = c(g).add(this.dateLimit).startOf("day");
          if (k.isAfter(d)) {
            k = d
          }
        }
      } else {
        g = this.startDate;
        k = this.rightCalendar.calendar[n][h];
        if (typeof this.dateLimit === "object") {
          var j = c(k).subtract(this.dateLimit).startOf("day");
          if (g.isBefore(j)) {
            g = j
          }
        }
      }
      if (this.singleDatePicker && f.hasClass("left")) {
        k = g.clone()
      } else {
        if (this.singleDatePicker && f.hasClass("right")) {
          g = k.clone()
        }
      }
      f.find("td").removeClass("active");
      if (g.isSame(k) || g.isBefore(k)) {
        b(l.target).addClass("active");
        this.startDate = g;
        this.endDate = k;
        this.chosenLabel = this.locale.customRangeLabel
      } else {
        if (g.isAfter(k)) {
          b(l.target).addClass("active");
          var i = this.endDate.diff(this.startDate);
          this.startDate = g;
          this.endDate = c(g).add("ms", i);
          this.chosenLabel = this.locale.customRangeLabel
        }
      }
      this.leftCalendar.month.month(this.startDate.month()).year(this.startDate.year());
      this.rightCalendar.month.month(this.endDate.month()).year(this.endDate.year());
      this.updateCalendars();
      k.endOf("day");
      if (this.singleDatePicker) {
        this.clickApply();
      }
      this.updateInputText();/*Modified by suryadev..*/
     // this.hide();/*Update suryadev*/
    },
    clickApply: function(d) {
      this.updateInputText();
      this.hide();
      this.element.trigger("apply.daterangepicker", this);
    },
    clickCancel: function(d) {
      this.startDate = this.oldStartDate;
      this.endDate = this.oldEndDate;
      this.chosenLabel = this.oldChosenLabel;
      this.updateView();
      this.updateCalendars();
      this.hide();
      this.element.trigger("cancel.daterangepicker", this)
    },
    updateMonthYear: function(h) {
      var j = b(h.target).closest(".calendar").hasClass("left"),
              i = j ? "left" : "right",
              g = this.container.find(".calendar." + i);
      var f = parseInt(g.find(".monthselect").val(), 10);
      var d = g.find(".yearselect").val();
      this[i + "Calendar"].month.month(f).year(d);
      this.updateCalendars()
    },
    updateTime: function(j) {
      var l = b(j.target).closest(".calendar").hasClass("left"),
              m = l ? "left" : "right",
              d = this.container.find(".calendar." + m);
      var i = parseInt(d.find(".hourselect").val(), 10);
      var g = parseInt(d.find(".minuteselect").val(), 10);
      if (this.timePicker12Hour) {
        var k = d.find(".ampmselect").val();
        if (k === "PM" && i < 12) {
          i += 12
        }
        if (k === "AM" && i === 12) {
          i = 0
        }
      }
      if (l) {
        var f = this.startDate.clone();
        f.hour(i);
        f.minute(g);
        this.startDate = f;
        this.leftCalendar.month.hour(i).minute(g)
      } else {
        var h = this.endDate.clone();
        h.hour(i);
        h.minute(g);
        this.endDate = h;
        this.rightCalendar.month.hour(i).minute(g)
      }
      this.updateCalendars()
    },
    updateCalendars: function() {
      this.leftCalendar.calendar = this.buildCalendar(this.leftCalendar.month.month(), this.leftCalendar.month.year(), this.leftCalendar.month.hour(), this.leftCalendar.month.minute(), "left");
      this.rightCalendar.calendar = this.buildCalendar(this.rightCalendar.month.month(), this.rightCalendar.month.year(), this.rightCalendar.month.hour(), this.rightCalendar.month.minute(), "right");
      this.container.find(".calendar.left").empty().html(this.renderCalendar(this.leftCalendar.calendar, this.startDate, this.minDate, this.maxDate));
      this.container.find(".calendar.right").empty().html(this.renderCalendar(this.rightCalendar.calendar, this.endDate, this.startDate, this.maxDate));
      this.container.find(".ranges li").removeClass("active");
      var d = true;
      var f = 0;
      for (var e in this.ranges) {
        if (this.timePicker) {
          if (this.startDate.isSame(this.ranges[e][0]) && this.endDate.isSame(this.ranges[e][1])) {
            d = false;
            this.chosenLabel = this.container.find(".ranges li:eq(" + f + ")").addClass("active").html()
          }
        } else {
          if (this.startDate.format("YYYY-MM-DD") == this.ranges[e][0].format("YYYY-MM-DD") && this.endDate.format("YYYY-MM-DD") == this.ranges[e][1].format("YYYY-MM-DD")) {
            d = false;
            this.chosenLabel = this.container.find(".ranges li:eq(" + f + ")").addClass("active").html()
          }
        }
        f++
      }
      if (d) {
        this.chosenLabel = this.container.find(".ranges li:last").addClass("active").html()
      }
    },
    buildCalendar: function(p, r, j, h, q) {
      var d = c([r, p, 1]);
      var n = c(d).subtract("month", 1).month();
      var m = c(d).subtract("month", 1).year();
      var s = c([m, n]).daysInMonth();
      var f = d.day();
      var l;
      var k = [];
      for (l = 0; l < 6; l++) {
        k[l] = []
      }
      var o = s - f + this.locale.firstDay + 1;
      if (o > s) {
        o -= 7;
      }
      if (f == this.locale.firstDay) {
        o = s - 6;
      }
      var g = c([m, n, o, 12, h]);
      var e, t;
      for (l = 0, e = 0, t = 0; l < 42; l++, e++, g = c(g).add("hour", 24)) {
        if (l > 0 && e % 7 === 0) {
          e = 0;
          t++
        }
        k[t][e] = g.clone().hour(j);
        g.hour(12)
      }
      return k;
    },
    renderDropdowns: function(i, h, d) {
      var l = i.month();
      var g = '<select class="monthselect">';
      var e = false;
      var q = false;
      for (var f = 0; f < 12; f++) {
        if ((!e || f >= h.month()) && (!q || f <= d.month())) {
          g += "<option value='" + f + "'" + (f === l ? " selected='selected'" : "") + ">" + this.locale.monthNames[f] + "</option>"
        }
      }
      g += "</select>";
      var k = i.year();
      var j = (d && d.year()) || (k + 5);
      var p = (h && h.year()) || (k - 50);
      var o = '<select class="yearselect">';
      for (var n = p; n <= j; n++) {
        o += '<option value="' + n + '"' + (n === k ? ' selected="selected"' : "") + ">" + n + "</option>"
      }
      o += "</select>";
      return g + o
    },
    renderCalendar: function(n, l, k, e) {
      var q = '<div class="calendar-date">';
      q += '<table class="table-condensed">';
      q += "<thead>";
      q += "<tr>";
      if (this.showWeekNumbers) {
        q += "<th></th>"
      }
      if (!k || k.isBefore(n[1][1])) {
        q += '<th class="prev available"><i class="fa fa-arrow-left icon-arrow-left glyphicon glyphicon-arrow-left"></i></th>'
      } else {
        q += "<th></th>"
      }
      var g = this.locale.monthNames[n[1][1].month()] + n[1][1].format(" YYYY");
      if (this.showDropdowns) {
        g = this.renderDropdowns(n[1][1], k, e)
      }
      q += '<th colspan="5" class="month">' + g + "</th>";
      if (!e || e.isAfter(n[1][1])) {
        q += '<th class="next available"><i class="fa fa-arrow-right icon-arrow-right glyphicon glyphicon-arrow-right"></i></th>'
      } else {
        q += "<th></th>"
      }
      q += "</tr>";
      q += "<tr>";
      if (this.showWeekNumbers) {
        q += '<th class="week">' + this.locale.weekLabel + "</th>"
      }
      b.each(this.locale.daysOfWeek, function(t, i) {
        q += "<th>" + i + "</th>"
      });
      q += "</tr>";
      q += "</thead>";
      q += "<tbody>";
      for (var s = 0; s < 6; s++) {
        q += "<tr>";
        if (this.showWeekNumbers) {
          q += '<td class="week">' + n[s][0].week() + "</td>"
        }
        for (var h = 0; h < 7; h++) {
          var p = "available ";
          p += (n[s][h].month() == n[1][1].month()) ? "" : "off";
          if ((k && n[s][h].isBefore(k)) || (e && n[s][h].isAfter(e))) {
            p = " off disabled "
          } else {
            if (n[s][h].format("YYYY-MM-DD") == l.format("YYYY-MM-DD")) {
              p += " active ";
              if (n[s][h].format("YYYY-MM-DD") == this.startDate.format("YYYY-MM-DD")) {
                p += " start-date "
              }
              if (n[s][h].format("YYYY-MM-DD") == this.endDate.format("YYYY-MM-DD")) {
                p += " end-date "
              }
            } else {
              if (n[s][h] >= this.startDate && n[s][h] <= this.endDate) {
                p += " in-range ";
                if (n[s][h].isSame(this.startDate)) {
                  p += " start-date "
                }
                if (n[s][h].isSame(this.endDate)) {
                  p += " end-date "
                }
              }
            }
          }
          var r = "r" + s + "c" + h;
          q += '<td class="' + p.replace(/\s+/g, " ").replace(/^\s?(.*?)\s?$/, "$1") + '" data-title="' + r + '">' + n[s][h].date() + "</td>"
        }
        q += "</tr>"
      }
      q += "</tbody>";
      q += "</table>";
      q += "</div>";
      var m;
      if (this.timePicker) {
        q += '<div class="calendar-time">';
        q += '<select class="hourselect">';
        var f = 0;
        var j = 23;
        var d = l.hour();
        if (this.timePicker12Hour) {
          f = 1;
          j = 12;
          if (d >= 12) {
            d -= 12
          }
          if (d === 0) {
            d = 12
          }
        }
        for (m = f; m <= j; m++) {
          if (m == d) {
            q += '<option value="' + m + '" selected="selected">' + m + "</option>"
          } else {
            q += '<option value="' + m + '">' + m + "</option>"
          }
        }
        q += "</select> : ";
        q += '<select class="minuteselect">';
        for (m = 0; m < 60; m += this.timePickerIncrement) {
          var o = m;
          if (o < 10) {
            o = "0" + o
          }
          if (m == l.minute()) {
            q += '<option value="' + m + '" selected="selected">' + o + "</option>"
          } else {
            q += '<option value="' + m + '">' + o + "</option>"
          }
        }
        q += "</select> ";
        if (this.timePicker12Hour) {
          q += '<select class="ampmselect">';
          if (l.hour() >= 12) {
            q += '<option value="AM">AM</option><option value="PM" selected="selected">PM</option>'
          } else {
            q += '<option value="AM" selected="selected">AM</option><option value="PM">PM</option>'
          }
          q += "</select>"
        }
        q += "</div>"
      }
      return q;
    },
    remove: function() {
      this.container.remove();
      this.element.off(".daterangepicker");
      this.element.removeData("daterangepicker")
    }
  };
  b.fn.daterangepicker = function(e, d) {
    this.each(function() {
      var f = b(this);
      if (f.data("daterangepicker")) {
        f.data("daterangepicker").remove()
      }
      f.data("daterangepicker", new a(f, e, d))
    });
    return this;
  }
}(window.jQuery, window.moment);
