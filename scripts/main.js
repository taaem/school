function toggleClass (el){
 
    switch(el.className){
    	case "hidden":
    		el.className = "showing";
    		break;
    	case "showing":
    		el.className = "hidden";
    		break;
    }
}