
  async function getData(){
    try{
      console.log("funkcija iskviesta");

      const metai = input.value;  
  
        let result = await fetch(`https://api.nasa.gov/mars-photos/api/v1/rovers/opportunity/photos?earth_date=${metai}&api_key=UIweDsd518DNadIhyWnmXQq0fTZksxmHVQA6IaPS`);
            result = await result.json();
            console.log(result.photos[0].camera.full_name);

            const card = document.createElement('div');

            card.innerHTML = `<div class="card" style="width: 10rem; padding: 0; margin: 0; border-color: maroon; ">
              


            





            <bulma-modal-image src="${result.photos[0].img_src}"></bulma-modal-image>






                            
              <div class="card-body" style=" padding: 0; margin: 0; border-color: maroon;">
                <h5 class="card-title" style=" padding: 0; margin: 0; border-color: maroon;" >${result.photos[0].camera.full_name}</h5>       
              </div>
            </div>`

            root.appendChild(card);     
    }
    catch(error){
      alert("Nuotraukų nerasta");
      console.error(error);
    }
  }

  const button = document.getElementById('curiosity');
  button.addEventListener('click', getData);
  const root = document.getElementById('root');

  const input = document.getElementById('data');
  


// modal 
class modalImage extends HTMLElement {
    constructor() {
      super();
      const _shadowdomAccessibilityFromDom = 'open';
      this.attachShadow({
        mode: _shadowdomAccessibilityFromDom
      });
      this.shadowRoot.innerHTML = `
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" rel="stylesheet" type="text/css">  
      <a class="is-link">
        <figure class="image">
          <img class="_smallImage">
        </figure>
      </a>
      <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
          <p class="image">
            <img class="_largeImage">
          </p>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
      </div>
      `;
    }
  
    connectedCallback() {
      this._src = this.getAttribute('src');
      this._modal = this.shadowRoot.querySelector('.modal');
      this.shadowRoot.querySelector('._smallImage')
        .src = this._src;
      this.shadowRoot.querySelector('._largeImage')
        .src = this._src;
      this.shadowRoot.querySelector('a.is-link')
        .addEventListener('click', this.showModal.bind(this));
      this.shadowRoot.querySelector('.modal-close')
        .addEventListener('click', this.hideModal.bind(this));
    }
  
    disconnectedCallback() {
      this.shadowRoot.querySelector('a.is-link')
        .removeEventListener('click', this.showModal);
      this.shadowRoot.querySelector('.modal-close')
        .removeEventListener('click', this.hideModal);
    }
    
    setSrc(src) {
      this._src = src;
    }
    
    showModal() {
      this._modal.classList.add('is-active');
    }
    
    hideModal() {
      this._modal.classList.remove('is-active');
    }
    
    isModalVisible() {
      return this._modal.classList.contains('is-active');
    }
    
    toggleModal() {
      if (this.isModalVisible()) {
        this.hideModal()
      } else {
        this.showModal()
      }
    }
  }
  customElements.define('bulma-modal-image', modalImage);
// modal