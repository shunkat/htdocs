function car_check(){var e=document.estimate_form.car_type.options[document.estimate_form.car_type.selectedIndex].value,t=document.estimate_form.car_weight.options[document.estimate_form.car_weight.selectedIndex].value;"0"==e?"0"!=t&&""!=t&&(alert("軽自動車の場合は「自動車の種別」「車両重量」ともに「軽自動車」を選択してください。"),document.estimate_form.car_weight.options[1].selected=!0):("1"==e||"2"==e)&&""!=t&&"0"==t&&("1"==e?alert("小型の場合は「自動車の種別」「車両重量」ともに「軽自動車」以外を選択してください。"):"2"==e&&alert("普通の場合は「自動車の種別」「車両重量」ともに「軽自動車」以外を選択してください。"),document.estimate_form.car_weight.options[2].selected=!0)}function weight_check(){var e=document.estimate_form.car_type.options[document.estimate_form.car_type.selectedIndex].value,t=document.estimate_form.car_weight.options[document.estimate_form.car_weight.selectedIndex].value;""!=t&&("0"!=t?"0"==e&&(alert("軽自動車の場合は「自動車の種別」「車両重量」ともに「軽自動車」を選択してください。"),document.estimate_form.car_type.options[1].selected=!0,document.estimate_form.car_weight.options[1].selected=!0):"0"==t&&("1"==e||"2"==e)&&("1"==e?(alert("小型の場合は「自動車の種別」「車両重量」ともに「軽自動車」以外を選択してください。"),document.estimate_form.car_type.options[2].selected=!0):"2"==e&&(alert("普通の場合は「自動車の種別」「車両重量」ともに「軽自動車」以外を選択してください。"),document.estimate_form.car_type.options[3].selected=!0),document.estimate_form.car_weight.options[2].selected=!0))}