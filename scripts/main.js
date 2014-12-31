function toggleClass(el) {
	"use strict";
    switch (el.className) {
    
	case "hidden":
		el.className = "showing";
        break;
    case "showing":
		el.className = "hidden";
        break;
    }
}