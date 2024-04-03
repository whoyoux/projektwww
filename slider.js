class Slider extends HTMLElement {
	constructor() {
		super();

		const shadow = this.attachShadow({ mode: "open" });

		if (!this.hasAttribute("images")) {
			console.warn("slider comp has no images");
			return;
		}

		if (!this.hasAttribute("width")) {
			// default
			this.setAttribute("width", "100%");
		}

		if (!this.hasAttribute("time")) {
			this.setAttribute("time", 5000);
		}

		this.images = this.getAttribute("images")
			.split(",")
			.map((i) => i.trim());

		this.preload(this.images);

		this.totalImages = this.images.length;

		this.current = 0;

		const wrapper = document.createElement("div");

		wrapper.classList.add("slider-wrapper");

		wrapper.innerHTML = `
			<div class="slider_wrapper">
				<img id="currentImage" src="${this.images[this.current]}">
				<button id="prevButton" class="slider_btn left_btn">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg>
				</button> 
				<button id="nextButton" class="slider_btn right_btn">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
				</button> 
			</div>
			
			<p>
				Zdjęcie <span id="currentPicture">1</span> z ${this.totalImages}
			</p>
			
		`;

		this.$nextButton = wrapper.querySelector("#nextButton");
		this.$prevButton = wrapper.querySelector("#prevButton");
		this.$currentPicture = wrapper.querySelector("#currentPicture");
		this.$image = wrapper.querySelector("#currentImage");

		const style = document.createElement("style");

		style.innerHTML = `
		div {

			width: ${this.getAttribute("width")};
			margin: 25px auto;
		}
		p {
			text-align: center;
		}

		.slider_wrapper {
			width: 100%;
			height: 60dvh;
			position: relative;
			
		}

		#currentImage {
			width: 100%;
			height: 60dvh;
			object-fit: cover;
			border-radius: 28px;
			
		}

		.slider_btn svg {
			aspect-ratio: 1 / 1;
		}

		.slider_btn {
			width: 50px;
			height: 50px;
			background-color: #f1f1f1;
			border: none;
			border-radius: 100%;
			aspect-ratio: 1 / 1;
			cursor: pointer;
		}

		.left_btn {
			position: absolute;
			top: 50%;
			left: 10px;
			transform: translateY(-50%);
		}

		.right_btn {
			position: absolute;
			top: 50%;
			right: 10px;
			transform: translateY(-50%);
		}
		`;
		shadow.appendChild(wrapper);
		shadow.appendChild(style);
	}

	connectedCallback() {
		this.$nextButton.addEventListener("click", this.nextImage.bind(this));
		this.$prevButton.addEventListener("click", this.prevImage.bind(this));

		setInterval(() => this.nextImage(), this.getAttribute("time"));
	}

	nextImage() {
		this.current = (this.current + 1) % this.totalImages;
		this.updateImage();
	}
	prevImage() {
		this.current = (this.current - 1 + this.totalImages) % this.totalImages;
		this.updateImage();
	}

	updateImage() {
		this.$image.src = this.images[this.current];

		this.$currentPicture.innerText = this.current + 1;
	}

	preload(images) {
		// biome-ignore lint/complexity/noForEach: <explanation>
		images.forEach((image) => {
			const img = new Image();
			img.src = image;
		});
	}
}

window.customElements.define("x-slider", Slider);
