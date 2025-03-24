INSERT INTO muscles (name, `group`, created_at, updated_at) VALUES
-- 🔥 Cuello
('Neck', 'Neck', NOW(), NOW()),

-- 💪 Brazos
('Biceps', 'Arms', NOW(), NOW()),
('Triceps', 'Arms', NOW(), NOW()),
('Forearms', 'Arms', NOW(), NOW()),

-- ⚡ Hombros
('Front Delts', 'Shoulders', NOW(), NOW()),
('Side Delts', 'Shoulders', NOW(), NOW()),
('Rear Delts', 'Shoulders', NOW(), NOW()),

-- 🦵 Piernas
('Quadriceps', 'Legs', NOW(), NOW()),
('Hamstrings', 'Legs', NOW(), NOW()),
('Glutes', 'Legs', NOW(), NOW()),
('Calves', 'Legs', NOW(), NOW()),

-- 🏋️ Espalda
('Upper Traps', 'Back', NOW(), NOW()),
('Lower Traps', 'Back', NOW(), NOW()),
('Lats', 'Back', NOW(), NOW()),
('Rhomboids', 'Back', NOW(), NOW()),
('Erector Spinae', 'Back', NOW(), NOW()),

-- 🦸 Pecho
('Upper Chest', 'Chest', NOW(), NOW()),
('Middle Chest', 'Chest', NOW(), NOW()),
('Lower Chest', 'Chest', NOW(), NOW()),

-- 🏆 Core
('Abs', 'Core', NOW(), NOW()),
('Obliques', 'Core', NOW(), NOW());



-- $exercises = [
--        [
--                 'name' => 'Romanian Deadlift (RDL)',
--                 'tutorial' => 'https://www.youtube.com/watch?v=JCXUYuzwNrM',
--                 'muscles' => ['Hamstrings', 'Glutes', 'Lower Back']
--             ],
--             [
--                 'name' => 'Machine Calf Raises',
--                 'tutorial' => 'https://www.youtube.com/watch?v=wvIAyxpjEuc',
--                 'muscles' => ['Calves']
--             ],
--             [
--                 'name' => 'Machine Squat',
--                 'tutorial' => 'https://www.youtube.com/watch?v=1xMaFs0L3ao',
--                 'muscles' => ['Quadriceps', 'Glutes']
--             ],
--             [
--                 'name' => 'Hack Squat',
--                 'tutorial' => 'https://www.youtube.com/watch?v=YaXPRqUwItQ',
--                 'muscles' => ['Quadriceps', 'Glutes']
--             ],
--             [
--                 'name' => 'Smith Machine Hack Squat',
--                 'tutorial' => 'https://www.youtube.com/watch?v=YaXPRqUwItQ',
--                 'muscles' => ['Quadriceps', 'Glutes']
--             ],
--             [
--                 'name' => 'Bulgarian Split Squat',
--                 'tutorial' => 'https://www.youtube.com/watch?v=2C-uNgKwPLE',
--                 'muscles' => ['Quadriceps', 'Glutes']
--             ],
--             [
--                 'name' => 'Reverse Lunges',
--                 'tutorial' => 'https://www.youtube.com/watch?v=wrwwXE_x-pQ',
--                 'muscles' => ['Quadriceps', 'Glutes', 'Hamstrings']
--             ],
--             [
--                 'name' => 'Smith Machine Bulgarian Split Squat',
--                 'tutorial' => 'https://www.youtube.com/watch?v=q9tyObJgPzk',
--                 'muscles' => ['Quadriceps', 'Glutes']
--             ],
--             [
--                 'name' => 'Smith Machine Lunges',
--                 'tutorial' => 'https://www.youtube.com/watch?v=9xQpHdI6cSg',
--                 'muscles' => ['Quadriceps', 'Glutes', 'Hamstrings']
--             ],
--             [
--                 'name' => 'Lunges',
--                 'tutorial' => 'https://www.youtube.com/watch?v=QOVaHwm-Q6U',
--                 'muscles' => ['Quadriceps', 'Glutes', 'Hamstrings']
--             ],
--             [
--                 'name' => 'Leg Extension',
--                 'tutorial' => 'https://www.youtube.com/watch?v=YyvSfVjQeL0',
--                 'muscles' => ['Quadriceps']
--             ],
--             [
--                 'name' => 'Sissy Squat',
--                 'tutorial' => 'https://www.youtube.com/watch?v=Ik2R5hCmNcI',
--                 'muscles' => ['Quadriceps']
--             ],
--             [
--                 'name' => 'Hamstring Seated Curl',
--                 'tutorial' => 'https://www.youtube.com/watch?v=1Tq3QdYUuHs',
--                 'muscles' => ['Hamstrings']
--             ],
--             [
--                 'name' => 'One Leg Hamstring Curl',
--                 'tutorial' => 'https://www.youtube.com/watch?v=d2TSY2oCEk4',
--                 'muscles' => ['Hamstrings']
--             ],
--             [
--                 'name' => 'Back Extension',
--                 'tutorial' => 'https://www.youtube.com/watch?v=ph3pddpKzzw',
--                 'muscles' => ['Lower Back', 'Glutes', 'Hamstrings']
--             ],
--             [
--                 'name' => 'Lying Leg Curl',
--                 'tutorial' => 'https://www.youtube.com/watch?v=1Tq3QdYUuHs',
--                 'muscles' => ['Hamstrings']
--             ],
--             [
--                 'name' => 'GHD Extension',
--                 'tutorial' => 'https://www.youtube.com/watch?v=U3Y2oGjx1LE',
--                 'muscles' => ['Lower Back', 'Glutes', 'Hamstrings']
--             ],
--             [
--                 'name' => 'Neck Curl',
--                 'tutorial' => 'https://www.youtube.com/watch?v=RUPG3jaW0-0',
--                 'muscles' => ['Neck']
--             ],
--             [
--                 'name' => 'Neck Extension',
--                 'tutorial' => 'https://www.youtube.com/watch?v=MQ3ZJ8pA7ug',
--                 'muscles' => ['Neck']
--             ],
--             [
--                 'name' => 'Neck Side Curl',
--                 'tutorial' => 'https://www.youtube.com/watch?v=8hTg3FxTymY',
--                 'muscles' => ['Neck']
--             ],
--             [
--                 'name' => 'Bench Press',
--                 'tutorial' => 'https://www.youtube.com/watch?v=rVI4V3kUQ_4',
--                 'muscles' => ['Chest', 'Triceps', 'Shoulders']
--             ],
--             [
--                 'name' => 'Alternating Dumbbell Curl',
--                 'tutorial' => 'https://www.youtube.com/watch?v=ykJmrZ5v0Oo',
--                 'muscles' => ['Biceps']
--             ],
--             [
--                 'name' => 'Overhead Machine Extension',
--                 'tutorial' => 'https://www.youtube.com/watch?v=w2aPJxjLb30',
--                 'muscles' => ['Triceps']
--             ],
--             [
--                 'name' => 'Rope Overhead Extension',
--                 'tutorial' => 'https://www.youtube.com/watch?v=0-xdpGqXaWU',
--                 'muscles' => ['Triceps']
--             ],
--             [
--                 'name' => 'JM Press',
--                 'tutorial' => 'https://www.youtube.com/watch?v=MZK6mPd8wvc',
--                 'muscles' => ['Triceps', 'Chest']
--             ],
--             [
--                 'name' => 'French Press',
--                 'tutorial' => 'https://www.youtube.com/watch?v=0bYVu1IoZaI',
--                 'muscles' => ['Triceps']
--             ],
--             [
--                 'name' => 'Dumbbell Extension',
--                 'tutorial' => 'https://www.youtube.com/watch?v=g6z_AOLrW9I',
--                 'muscles' => ['Triceps']
--             ],
--             [
--                 'name' => 'V-Bar Pressdown',
--                 'tutorial' => 'https://www.youtube.com/watch?v=2-LAMcpzODU',
--                 'muscles' => ['Triceps']
--             ],
--             [
--                 'name' => 'Rope Pressdown',
--                 'tutorial' => 'https://www.youtube.com/watch?v=VwTPvVvICew',
--                 'muscles' => ['Triceps']
--             ],
--             [
--                 'name' => 'Reverse Curl',
--                 'tutorial' => 'https://www.youtube.com/watch?v=XkBV5y_LlRE',
--                 'muscles' => ['Biceps', 'Forearms']
--             ],
--             [
--                 'name' => 'Weighted Sit Ups',
--                 'tutorial' => 'https://www.youtube.com/watch?v=Wg9ryV7ZsUM',
--                 'muscles' => ['Abs']
--             ],
--             [
--                 'name' => 'Leg Raises',
--                 'tutorial' => 'https://www.youtube.com/watch?v=JB2oyawG9KI',
--                 'muscles' => ['Abs', 'Hip Flexors']
--             ],
--             [
--                 'name' => 'Full Range of Motion Dumbbell Press',
--                 'tutorial' => 'https://www.youtube.com/watch?v=nEF0bv2FW94',
--                 'muscles' => ['Chest', 'Triceps', 'Shoulders']
--             ],
--             [
--                 'name' => 'Seated Overhead Press',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example1',
--                 'muscles' => ['Shoulders', 'Triceps']
--             ],
--             [
--                 'name' => 'Overhead Press',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example2',
--                 'muscles' => ['Shoulders', 'Triceps']
--             ],
--             [
--                 'name' => 'Smith Machine Overhead Press',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example3',
--                 'muscles' => ['Shoulders', 'Triceps']
--             ],
--             [
--                 'name' => 'Seated Dumbbell Press',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example4',
--                 'muscles' => ['Shoulders', 'Triceps']
--             ],
--             [
--                 'name' => 'Machine Lateral Raises',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example5',
--                 'muscles' => ['Shoulders']
--             ],
--             [
--                 'name' => 'Dumbbell Lateral Raises',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example6',
--                 'muscles' => ['Shoulders']
--             ],
--             [
--                 'name' => 'Rear Delt Fly',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example7',
--                 'muscles' => ['Rear Delts']
--             ],
--             [
--                 'name' => 'Dumbbell Rear Delt Fly',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example8',
--                 'muscles' => ['Rear Delts']
--             ],
--             [
--                 'name' => 'Face Pull',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example9',
--                 'muscles' => ['Rear Delts', 'Traps']
--             ],
--             [
--                 'name' => 'Dumbbell Hammer Curl',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example10',
--                 'muscles' => ['Biceps', 'Forearms']
--             ],
--             [
--                 'name' => 'Reverse Slow Curl',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example11',
--                 'muscles' => ['Biceps', 'Forearms']
--             ],
--             [
--                 'name' => 'Straight Bar Pressdown',
--                 'tutorial' => 'https://www.youtube.com/watch?v=example12',
--                 'muscles' => ['Triceps']
--             ],
--              ['name' => 'Seated Overhead Press', 'tutorial' => 'https://www.youtube.com/watch?v=example1', 'muscles' => ['Shoulders', 'Triceps']],
--             ['name' => 'Overhead Press', 'tutorial' => 'https://www.youtube.com/watch?v=example2', 'muscles' => ['Shoulders', 'Triceps']],
--             ['name' => 'Smith Machine Overhead Press', 'tutorial' => 'https://www.youtube.com/watch?v=example3', 'muscles' => ['Shoulders', 'Triceps']],
--             ['name' => 'Seated Dumbbell Press', 'tutorial' => 'https://www.youtube.com/watch?v=example4', 'muscles' => ['Shoulders', 'Triceps']],
--             ['name' => 'Machine Lateral Raises', 'tutorial' => 'https://www.youtube.com/watch?v=example5', 'muscles' => ['Shoulders']],
--             ['name' => 'Dumbbell Lateral Raises', 'tutorial' => 'https://www.youtube.com/watch?v=example6', 'muscles' => ['Shoulders']],
--             ['name' => 'Rear Delt Fly', 'tutorial' => 'https://www.youtube.com/watch?v=example7', 'muscles' => ['Rear Delts']],
--             ['name' => 'Dumbbell Rear Delt Fly', 'tutorial' => 'https://www.youtube.com/watch?v=example8', 'muscles' => ['Rear Delts']],
--             ['name' => 'Face Pull', 'tutorial' => 'https://www.youtube.com/watch?v=example9', 'muscles' => ['Rear Delts', 'Traps']],
--             ['name' => 'Dumbbell Hammer Curl', 'tutorial' => 'https://www.youtube.com/watch?v=example10', 'muscles' => ['Biceps', 'Forearms']],
--             ['name' => 'Reverse Slow Curl', 'tutorial' => 'https://www.youtube.com/watch?v=example11', 'muscles' => ['Biceps', 'Forearms']],
--             ['name' => 'Straight Bar Pressdown', 'tutorial' => 'https://www.youtube.com/watch?v=example12', 'muscles' => ['Triceps']],
--             ['name' => 'GHD Sit Ups', 'tutorial' => 'https://www.youtube.com/watch?v=example13', 'muscles' => ['Abs']],
--             ['name' => 'Olympic Squat', 'tutorial' => 'https://www.youtube.com/watch?v=example14', 'muscles' => ['Quads', 'Glutes']],
--             ['name' => 'Paused Squat', 'tutorial' => 'https://www.youtube.com/watch?v=example15', 'muscles' => ['Quads', 'Glutes']],
--             ['name' => 'Barbell Row', 'tutorial' => 'https://www.youtube.com/watch?v=example16', 'muscles' => ['Back', 'Biceps']],
--             ['name' => 'T-Bar Row', 'tutorial' => 'https://www.youtube.com/watch?v=example17', 'muscles' => ['Back', 'Biceps']],
--             ['name' => 'Machine Row', 'tutorial' => 'https://www.youtube.com/watch?v=example18', 'muscles' => ['Back']],
--             ['name' => 'Cable Row', 'tutorial' => 'https://www.youtube.com/watch?v=example19', 'muscles' => ['Back', 'Biceps']],
--             ['name' => 'Pull Ups', 'tutorial' => 'https://www.youtube.com/watch?v=example20', 'muscles' => ['Back', 'Biceps']],
--             ['name' => 'Chin Ups', 'tutorial' => 'https://www.youtube.com/watch?v=example21', 'muscles' => ['Back', 'Biceps']],
--             ['name' => 'Lat Pull Down', 'tutorial' => 'https://www.youtube.com/watch?v=example22', 'muscles' => ['Back', 'Biceps']],
--             ['name' => 'Belt Squat', 'tutorial' => 'https://www.youtube.com/watch?v=example23', 'muscles' => ['Quads', 'Glutes']],
--             ['name' => 'Leg Press', 'tutorial' => 'https://www.youtube.com/watch?v=example24', 'muscles' => ['Quads', 'Glutes']],
--             ['name' => 'Horizontal Leg Press', 'tutorial' => 'https://www.youtube.com/watch?v=example25', 'muscles' => ['Quads', 'Glutes']],
--             ['name' => 'Adductor Machine', 'tutorial' => 'https://www.youtube.com/watch?v=example26', 'muscles' => ['Adductors']],
-- ];
