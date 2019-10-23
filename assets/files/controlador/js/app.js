// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
  apiKey: 'AIzaSyBnqPhjPMeIZ3bDb2cIIZcJTVt6oSyt0_Y',
  authDomain: 'ssg-music-app.firebaseapp.com',
  projectId: 'ssg-music-app'
});
//agregar Documentos
var db = firebase.firestore();

function guardar(){

var empleado=document.getElementById('empleado').value;
var usuario=document.getElementById('usuario').value;
var clave=document.getElementById('clave').value;
var confclave=document.getElementById('confclave').value;
if (clave != confclave ) {
	alert("No coinciden las contraseñas");
}else{
	db.collection("usuarios").add({
    empleadoId: empleado,
    usuario: usuario,
    clave: clave,
    estado:1

})
.then(function(docRef) {
    console.log("Document written with ID: ", docRef.id);
})
.catch(function(error) {
    console.error("Error adding document: ", error);
});

}



}



//LEER DATOS
 var tabla=document.getElementById('tabla');
db.collection("usuarios").get().then((querySnapshot) => {
	tabla.innerHTML = '';
    querySnapshot.forEach((doc) => {
        tabla.innerHTML += `      <tr>
        <td>${doc.id}</td>
        <td><?php echo $num+=1;?></td>
        <td style="font-style: oblique;">${doc.data().usuario}</td>
        <td></td>
        <td>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editEst" ><i class="fas fa-edit"></i></a>
          <a href="#" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></a>

        </td>
      </tr>`

      var valor = `${doc.data().empleadoId}`;

db.collection("empleados").where("empleadoId", "==",valor )
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
        	       var em=document.getElementById('em');
            // doc.data() is never undefined for query doc snapshots
            console.log(doc.id, " => ", doc.data());
               em.innerHTML += `    <td>${doc.data().usuario}</td>
                 `

        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
});
        });