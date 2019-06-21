
class Modal {

    constructor(name) {
        this.name = name;
    }

    settings( data )
    {

        this.style = (data.style) ? data.style : NULL;
        this.defineModalStyling();

        this.background = (data.background) ? data.background : NULL;
        this.defineModalBackground();
    }

    defineModalStyling()
    {
        let padding = (this.style.padding) ? parseInt(this.style.padding) : "";
        let margin = (this.style.margin) ? parseInt(this.style.margin) : "";
        let display = (this.style.display) ? this.style.display.toString() : "";
        let vertical = (this.style.vertical) ? this.changeVerticalPostionToString(this.style.vertical.toString()) : "";
        let horizontal = (this.style.horizontal) ? this.style.horizontal.toString() : "";

        this.padding = padding;
        this.margin = margin;
        this.display = display;
        this.vertical = vertical;
        this.horizontal = horizontal;
    }

    defineModalBackground()
    {
        let showBackground = (this.background.show);
        let color = (this.background.color) ? this.background.color : "";
        let transparency = (this.background.transparency) ? parseFloat(this.background.transparency) : "";
        let backgroundColor = (color && transparency) ? this.hexToRGB(color, transparency) : "";

        this.backgroundShow = showBackground;
        this.backgroundColor = backgroundColor;
    }

    hexToRGB(h, transparency)
    {
        let r = 0, g = 0, b = 0;

        if (h.length == 4) {
            r = "0x" + h[1] + h[1];
            g = "0x" + h[2] + h[2];
            b = "0x" + h[3] + h[3];

        } else if (h.length == 7) {
            r = "0x" + h[1] + h[2];
            g = "0x" + h[3] + h[4];
            b = "0x" + h[5] + h[6];
        }

        return "rgb("+ +r + "," + +g + "," + +b + "," + transparency +")";
    }

    buildModal()
    {
        this.destroyModal();
        let container = document.createElement('div');
        container.setAttribute('id', this.name);
        container.classList.add('modal-container');
        document.body.appendChild(container);

        (this.backgroundShow && this.backgroundColor) ? container.style.backgroundColor = this.backgroundColor : "";
        (this.padding) ? container.style.padding = this.padding + "px" : "";
        (this.margin) ? container.style.margin = this.margin + "px" : "";
        (this.vertical) ? container.style.alignItems = this.vertical : "";
        (this.horizontal) ? container.style.justifyContent = this.horizontal : "";

        container.innerHTML = "<div class='modal' id='modal'></div>";
        let modal = document.getElementById("modal");
    }

    destroyModal()
    {
        if ($("#" + this.name).length >= 1) {
            document.getElementById(this.name).remove();
        }
    }

    changeVerticalPostionToString( position )
    {
        let newPosition = position;
        newPosition = (position === 'top') ? 'flex-start' : newPosition;
        newPosition = (position === 'bottom') ? 'flex-end' : newPosition;
        return newPosition;
    }
}
