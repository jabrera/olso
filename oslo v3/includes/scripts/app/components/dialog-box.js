DialogBox = {
    ready: function() {
        this.el = $(".dialog-box");
        this.hide();
        App.log("\t\tDialogBox initiated.");
    },
    stackedButtons: function() {
        if(this.el.find("ul.stacked").length != 0) {
            $action = this.el.find(".action");
            $action.addClass("fill");
            $action.find("a").css("width", $action.find("li").outerWidth());
        } else
            this.el.find(".action").removeClass("fill");
    },
    fixPosition: function(speed) {
        var self = this;
        setTimeout(function() {
            speed *= Animation.baseSpeed;
            if(Layout.responsive && !Slider.isEnabled()) {
                self.el.animate({
                    "left": ((App.width() - self.outerWidth())/2)+(Slider.width()/2)+"px"
                }, speed);
            } else {
                self.el.animate({
                    "left": ((App.width() - self.outerWidth())/2)+"px"
                }, speed);
            }
            self.el.css("top", (App.height() - self.outerHeight())/2+"px");
            self.stackedButtons();
        }, 10);
    },
    showContent: function(content) {
        Loading.show();
        var self = this;
        content.type = "post";
        content.data["_cl"] = content._cl;
        content.data["_direct"] = true;
        $.ajax({
            type: content.type,
            cache: content.cache,
            url: content.url,
            data: content.data,
            success: function(html) {
                self.el.html(html);
                self.fixPosition(0);
                Loading.hide();
                self.show(1);
            }
        })
    },
    show: function() {
        this.loader(false, 0);
        BlackTrans.show();
        this.fixPosition(0);
        this.el.css("opacity", "0");
        this.el.show();
        var self = this;
        setTimeout(function() {
            self.el.animate({
                "opacity": "1"
            }, 250);
        }, 10);
    },
    hide: function() {
        BlackTrans.hide();
        var self = this;
        this.el.animate({
            "opacity": "0"
        }, 250, function() {
            self.el.hide();
        })
    },
    width: function() {
        return this.el.width();
    },
    height: function() {
        return this.el.height();
    },
    outerWidth: function() {
        return this.el.outerWidth();
    },
    outerHeight: function() {
        return this.el.outerHeight();
    },
    loader: function(show = true, speed = .25) {
        if(show) {
            this.el.append('<div class="blur light"><div class="table"><div class="loading">'+Loading.el.html()+'</div></div></div>')
                .find(".blur").animate({"opacity": "1"}, speed * Animation.baseSpeed);
            this.el.scrollTop(0);
            this.el.css("overflow", "hidden");
        } else {
            this.el.find(".blur").animate({"opacity": "0"}, speed * Animation.baseSpeed, function() {$(this).remove()});
            this.el.css("overflow-y", "scroll");
        }
    },
    isLoading: function() {
        return (this.el.find(".blur").length == 1);
    }
}