class SmoothScroll {
  constructor(links, options) {
    this.links = document.querySelectorAll(links);
    if (options === undefined) {
      this.options = {
        behavior: "smooth",
        block: "start"
      };
    } else {
      this.options = options;
    }
    this.scrollToSection = this.scrollToSection.bind(this);
  }

  scrollToSection(event) {
    event.preventDefault();
    const href = event.currentTarget.getAttribute("href");
    const section = document.querySelector(href);
    section.scrollIntoView(this.options);
  }

  addLinkEvent() {
    this.links.forEach((link) => {
      link.addEventListener("click", this.scrollToSection);
    })
  }

  init() {
    if (this.links.length) {
      this.addLinkEvent();
      return this;
    }
  }
}

class Accordion{
  constructor(list){
    this.accordionList = document.querySelectorAll(list);
    this.inactiveClass = "hidden";
  }
  
  toggleAccordion(item){
      item.querySelector("dd").classList.toggle(this.inactiveClass);
      item.querySelector("dt span").classList.toggle("w-2");
      item.querySelector("dt span").classList.toggle("h-4");
      item.querySelector("dt span").classList.toggle("w-4");
      item.querySelector("dt span").classList.toggle("h-2");

      console.log('cscsccsc');
  }

  addAccordionEvent(){
    this.accordionList.forEach((item)=>{
      item.addEventListener("click", ()=> {
        this.toggleAccordion(item)
      });
    })
  }

  init(){
    if(this.accordionList.length){
      this.addAccordionEvent();
      this.accordionList[0].querySelector("dd").classList.add("block");
    }
  }
}

const smoothScroll = new SmoothScroll("[data-scroll='smooth'] a[href^='#']");
smoothScroll.init();

const accordion = new Accordion("[data-accordion='accordion'] #accordion");
accordion.init();