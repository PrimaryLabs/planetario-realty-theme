import "../css/app.css";
import {
	ArrowRight,
	Building2,
	Compass,
	createIcons,
	Handshake,
	Mail,
	MapPin,
	Phone,
	ShieldCheck,
	Sparkles,
	Target,
	Users,
	HeartHandshake,
	ChartNoAxesCombined,
} from "lucide";

createIcons({
	icons: {
		ArrowRight,
		Building2,
		Compass,
		Handshake,
		Mail,
		MapPin,
		Phone,
		ShieldCheck,
		Sparkles,
		Target,
		Users,
		HeartHandshake,
		ChartNoAxesCombined,
	},
});

const header = document.querySelector("[data-site-header]");
const menuToggle = document.querySelector("[data-menu-toggle]");
const mobileMenu = document.querySelector("[data-mobile-menu]");
const contactForm = document.querySelector("[data-contact-form]");

const updateHeader = () => {
	if (!header) {
		return;
	}

	header.classList.toggle("is-scrolled", window.scrollY > 20);
};

updateHeader();
window.addEventListener("scroll", updateHeader, { passive: true });

if (menuToggle && mobileMenu) {
	menuToggle.addEventListener("click", () => {
		const isOpen = menuToggle.getAttribute("aria-expanded") === "true";
		menuToggle.setAttribute("aria-expanded", String(!isOpen));
		mobileMenu.hidden = isOpen;
		document.body.classList.toggle("has-open-menu", !isOpen);
	});

	mobileMenu.querySelectorAll("a").forEach((link) => {
		link.addEventListener("click", () => {
			menuToggle.setAttribute("aria-expanded", "false");
			mobileMenu.hidden = true;
			document.body.classList.remove("has-open-menu");
		});
	});
}

const observer = new IntersectionObserver(
	(entries) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				entry.target.classList.add("is-visible");
				observer.unobserve(entry.target);
			}
		});
	},
	{ threshold: 0.14 },
);

document
	.querySelectorAll(".reveal")
	.forEach((element) => observer.observe(element));

if (contactForm) {
	contactForm.addEventListener("submit", () => {
		const note = contactForm.querySelector("[data-form-note]");
		if (note) {
			note.textContent =
				"Opening your email app with the message details.";
		}
	});
}
