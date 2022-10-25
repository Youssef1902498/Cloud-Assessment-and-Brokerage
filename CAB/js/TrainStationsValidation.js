const station = document.getElementById('station-name')
const form = document.getElementById('myForm')
const errorelement=document.getElementById('error')
form.addEventListener('submit',(e) =>{

let messages=[]
if(station.value===''|| station.value==null){
   
    messages.push('Name is required')

}
if(messages.length>0){

    e.preventDefault()
    errorelement.innerText=messages.join(',')
}

})