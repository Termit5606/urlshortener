document.addEventListener("DOMContentLoaded", function(event) {
    init()
    formControl()
})

const form = document.getElementById('ShortenerForm')
const input = document.getElementById('ShortenerInput')
const submit = document.getElementById('ShortenerSubmit')
const resultForm = document.getElementById('ShortenerResult')
const resultLink = document.getElementById('ShortenerLink')

const init = () => {
    if (!form || !input || !submit || !resultForm || !resultLink) return void 0

    form.addEventListener('submit', function(event) {
        event.preventDefault()

        ajaxSubmit()
    })
}

const formControl = () => {
    input.addEventListener("input", function(event) {
        if (input.value.length > 0) toggleSubmit(true) 
        else toggleSubmit(false)
    })
}

const toggleSubmit = (value) => {
    if (value == false) {
        submit.setAttribute('disabled', true)
    } else {
        submit.removeAttribute('disabled')
    }
}

const showResultForm = () => {
    resultForm.style.opacity = "100"
}

const setResultLink = (link) => {
    resultLink.setAttribute('href', link)
    resultLink.innerText = link
}

const ajaxSubmit = () => {
    let request = new XMLHttpRequest()
    let url = form.getAttribute('action')
    let params = {
        'url' : input.value,
    };

    fetch(url, { 
        method: "POST",
        body: JSON.stringify(params),   
        headers: {
            "content-type": "application/json",
            'X-CSRF-TOKEN': document.querySelector('meta[name="_token"]').getAttribute('content')
        } 
    })
    .then( (response) => {
        if (response.status !== 200) {           
            return Promise.reject();
        }

        return response.json()
    })
    .then((i) => {

        showResultForm()
        setResultLink(i.url)
    })
    .catch(() => console.log('ошибка')); 
}
