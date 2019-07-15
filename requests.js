function paramsAsQueryString(params) {
	var outString = ""
	Object.keys(params).forEach(function(key) {
		outString += encodeURIComponent(key) + "="
		outString += encodeURIComponent(params[key]) + "&"
	})
	return outString.substring(0, outString.length - 1)
}

function post(url, params, callback) {
	var request = new XMLHttpRequest()
	request.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			callback(this.responseText)
		}
	}
	request.open("POST", url, true)
	request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	request.send(paramsAsQueryString(params))

}

