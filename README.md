workout
    -- fecha  (que luego se transformara en dia)
    -- nombre
    -- lista de ejercicios  (que se ejecuto durante el dia)  (ya se creara una tabla de exercise)





exercise_log
    -- exercise_subid  (obtendremos el nombre del exercise)
    -- peso
    -- serie
    -- repeticiones
    -- user id



exercise
    -- nombre
    -- tutorial
    -- muscles que trabajara que extienda de muscle como belongs to o hasmany???  pero será un objeto porque seleccionare los musculos que trabajo el exercise

nombre varchar
tutorial al final será una url de youtube
muscle
    -- musculo
