// let diseaseHistory = [];
// let eatingHabit = [];
// let sleepPattern = [];

// document.getElementById('disease_history').addEventListener('change', function() {
//     let selectedValues = Array.from(this.selectedOptions).map(option => option.value);

//     diseaseHistory = [...new Set([...diseaseHistory, ...selectedValues])]; 

//     Array.from(this.options).forEach(option => {
//         if (diseaseHistory.includes(option.value)) {
//             option.disabled = true; 
//         } else {
//             option.disabled = false; 
//         }
//     });
//     updateSelectedDiseasesList();

//     // if (this.selectedOptions.length > 0) {
//     //     this.selectedIndex = 0; 
//     // }

//     console.log(diseaseHistory); 
// });

// document.getElementById('eating_habit').addEventListener('change', function() {
//     let selectedValues = Array.from(this.selectedOptions).map(option => option.value);

//     eatingHabit = [...new Set([...eatingHabit, ...selectedValues])]; 

//     Array.from(this.options).forEach(option => {
//         if (eatingHabit.includes(option.value)) {
//             option.disabled = true; 
//         } else {
//             option.disabled = false; 
//         }
//     });
//     updateSelectedEatingHabitList();

//     // if (this.selectedOptions.length > 0) {
//     //     this.selectedIndex = 0; 
//     // }

//     console.log(eatingHabit); 
// });

// document.getElementById('sleep_pattern').addEventListener('change', function() {
//     let selectedValues = Array.from(this.selectedOptions).map(option => option.value);

//     sleepPattern = [...new Set([...sleepPattern, ...selectedValues])]; 

//     Array.from(this.options).forEach(option => {
//         if (sleepPattern.includes(option.value)) {
//             option.disabled = true; 
//         } else {
//             option.disabled = false; 
//         }
//     });
//     updateSelectedSleepPatternList();

//     // if (this.selectedOptions.length > 0) {
//     //     this.selectedIndex = 0; 
//     // }

//     console.log(sleepPattern); 
// });


// function updateSelectedDiseasesList() {
//     const listElement = document.getElementById('selectedDiseasesList');
//     listElement.innerHTML = ''; 

//     diseaseHistory.forEach(diseaseId => {
//         const diseaseOption = document.querySelector(`#disease_history option[value='${diseaseId}']`);
//         if (diseaseOption) {
//             const li = document.createElement('li');
//             li.textContent = diseaseOption.textContent;
//             const removeLink = document.createElement('a');
//             removeLink.href = '#';
//             removeLink.textContent = ' Hapus';
//             removeLink.classList.add('text-danger', 'ml-2');
//             removeLink.onclick = function(event) {
//                 event.preventDefault(); // Mencegah link membuka halaman
//                 removeDisease(diseaseId);
//             };
//             li.appendChild(removeLink);
//             listElement.appendChild(li);
//         }
//     });

//     document.getElementById('diseaseHistoryInput').value = JSON.stringify(diseaseHistory);
// }

// function updateSelectedEatingHabitList() {
//     const listElement = document.getElementById('selectedEatingHabitList');
//     listElement.innerHTML = ''; 

//     eatingHabit.forEach(eatingHabitId => {
//         const eatingHabitOption = document.querySelector(`#eating_habit option[value='${eatingHabitId}']`);
//         if (eatingHabitOption) {
//             const li = document.createElement('li');
//             li.textContent = eatingHabitOption.textContent;
//             const removeLink = document.createElement('a');
//             removeLink.href = '#';
//             removeLink.textContent = ' Hapus';
//             removeLink.classList.add('text-danger', 'ml-2');
//             removeLink.onclick = function(event) {
//                 event.preventDefault(); // Mencegah link membuka halaman
//                 removeEatingHabit(eatingHabitId);
//             };
//             li.appendChild(removeLink);
//             listElement.appendChild(li);
//         }
//     });
//     document.getElementById('eatingHabitInput').value = JSON.stringify(eatingHabit);

// }

// function updateSelectedSleepPatternList() {
//     const listElement = document.getElementById('selectedSleepPatternList');
//     listElement.innerHTML = ''; 

//     sleepPattern.forEach(sleepPatternId => {
//         const sleepPatternOption = document.querySelector(`#sleep_pattern option[value='${sleepPatternId}']`);
//         if (sleepPatternOption) {
//             const li = document.createElement('li');
//             li.textContent = sleepPatternOption.textContent;
//             const removeLink = document.createElement('a');
//             removeLink.href = '#';
//             removeLink.textContent = ' Hapus';
//             removeLink.classList.add('text-danger', 'ml-2');
//             removeLink.onclick = function(event) {
//                 event.preventDefault(); // Mencegah link membuka halaman
//                 removeSleepPattern(sleepPatternId);
//             };
//             li.appendChild(removeLink);
//             listElement.appendChild(li);
//         }
//     });
//     document.getElementById('sleepPatternInput').value = JSON.stringify(sleepPattern);

// }

// function removeDisease(diseaseId) {
//     diseaseHistory = diseaseHistory.filter(id => id !== diseaseId);
//     Array.from(document.getElementById('disease_history').options).forEach(option => {
//         if (diseaseHistory.includes(option.value)) {
//             option.disabled = true; 
//         } else {
//             option.disabled = false; 
//         }
//     });

//     updateSelectedDiseasesList();
//     console.log(diseaseHistory); 
// }

// function removeEatingHabit(eatingHabitId) {
//     eatingHabit = eatingHabit.filter(id => id !== eatingHabitId);
//     Array.from(document.getElementById('eating_habit').options).forEach(option => {
//         if (eatingHabit.includes(option.value)) {
//             option.disabled = true; 
//         } else {
//             option.disabled = false; 
//         }
//     });

//     updateSelectedEatingHabitList();
//     console.log(eatingHabit); 
// }

// function removeSleepPattern(sleepPatternId) {
//     sleepPattern = sleepPattern.filter(id => id !== sleepPatternId);
//     Array.from(document.getElementById('sleep_pattern').options).forEach(option => {
//         if (sleepPattern.includes(option.value)) {
//             option.disabled = true; 
//         } else {
//             option.disabled = false; 
//         }
//     });

//     updateSelectedSleepPatternList();
//     console.log(sleepPattern); 
// }


document.querySelector('form').addEventListener('submit', function (e) {
    let confirmed = confirm('Apakah Anda yakin data yang dimasukkan sudah benar?');

    if (!confirmed) {
        e.preventDefault();
    }
});