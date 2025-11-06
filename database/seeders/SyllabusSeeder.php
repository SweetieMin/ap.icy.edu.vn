<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SyllabusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
    |--------------------------------------------------------------------------
    | ICY Kids 1
    |--------------------------------------------------------------------------
    */
        $ik1 = Subject::where('name', 'ICY Kids 1')->first();

        $lessons_ik1 = [
            [1, "Starter: Hello!", "greetings, numbers, days, colors", "Be, simple greetings", "Workbook: introduce yourself, color chart", "Understand and use greetings, days, and colors"],
            [2, "Unit 1: What’s this? – Lesson 1: School things", "bag, book, pen, ruler", "What’s this? It’s a …", "Label school items", "Identify and name school objects"],
            [3, "Unit 1: What’s this? – Lesson 2: School things", "pencil, desk, board, eraser", "This/That", "Find classroom objects", "Ask and answer about school items"],
            [4, "Unit 1: What’s this? – Lesson 3: School things", "apple, crayon, chair, table", "Articles a/an", "Workbook practice + short quiz", "Use a/an correctly in simple sentences"],
            [5, "Unit 2: Playtime! – Lesson 1: Toys", "teddy bear, ball, car, kite", "Is this your teddy? Yes/No", "Match toys and owners", "Ask and answer Yes/No questions"],
            [6, "Unit 2: Playtime! – Lesson 2: Toys", "robot, doll, yo-yo, train", "My/Your", "Toy catalog writing", "Use possessive adjectives correctly"],
            [7, "Unit 2: Playtime! – Lesson 3: Toys", "puzzle, game, bike, top", "Noun plurals", "Word search + speaking game", "Make plural forms of toy names"],
            [8, "Unit 3: This is my nose! – Lesson 1: My body", "nose, ear, mouth, hand", "These/Those", "Body labeling activity", "Identify body parts and use demonstratives"],
            [9, "Unit 3: This is my nose! – Lesson 2: My body", "arm, leg, head, hair", "am/is/are", "Body puzzle + workbook", "Describe body parts with correct verb form"],
            [10, "Unit 3: This is my nose! – Lesson 3: My body", "eyes, teeth, face, head", "Have got/Has got", "Draw and describe a monster", "Describe physical features"],
            [11, "Unit 4: He’s a hero! – Lesson 1: Jobs", "doctor, teacher, nurse, cook", "He’s/She’s a …", "Role play: Who am I?", "Identify and talk about jobs"],
            [12, "Unit 4: He’s a hero! – Lesson 2: Jobs", "driver, singer, builder, pilot", "Is he/she a …?", "Interview activity", "Ask and answer job-related questions"],
            [13, "Mid-term Test", "review vocabulary & grammar (Units 1–3)", "All learned structures", "Test + review quiz", "Assess understanding of Units 1–3"],
            [14, "Unit 5: Where’s the ball? – Lesson 1: The park", "park, swing, slide, bench", "In/on/under", "Treasure hunt game", "Use prepositions of place correctly"],
            [15, "Unit 5: Where’s the ball? – Lesson 2: The park", "tree, grass, flower, pond", "Where’s the …?", "Map drawing activity", "Ask and answer about location"],
            [16, "Unit 6: Billy’s teddy! – Lesson 1: Family members", "mum, dad, brother, sister", "Possessive ’s", "Family tree project", "Talk about family relationships"],
            [17, "Unit 6: Billy’s teddy! – Lesson 2: Family", "uncle, aunt, cousin, baby", "Have got/Has got", "Workbook + story retelling", "Describe family members using have got"],
            [18, "Unit 7: Are these his trousers? – Lesson 1: Clothes", "trousers, T-shirt, skirt, shoes", "Are these …?", "Mix & match outfit game", "Ask and answer about clothes"],
            [19, "Unit 7: Are these his trousers? – Lesson 2: Clothes", "coat, hat, gloves, scarf", "This/That/These/Those", "Design your outfit project", "Identify and describe clothes using demonstratives"],
            [20, "Fluency Time 1 + Review", "vocabulary Units 1–7", "Revision", "Speaking + listening activities", "Review and consolidate knowledge"],
            [21, "Project: My School Poster", "school supplies & toys vocabulary", "Present simple", "Create and present a poster", "Integrate learned topics into presentation"],
            [22, "Revision & Games", "all units vocabulary", "All grammar points", "Game-based learning", "Reinforce language in fun context"],
            [23, "Mock Test + Speaking Review", "all topics", "Integrated skills", "Mock test + oral interview", "Prepare for final assessment"],
            [24, "Final Test", "all units", "Comprehensive review", "Final written and oral test", "Demonstrate overall course outcomes"]
        ];

        foreach ($lessons_ik1 as $lesson) {
            $ik1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content' => $lesson[1],
                'vocabulary' => $lesson[2],
                'grammar' => $lesson[3],
                'assignment' => $lesson[4],
                'CLO' => $lesson[5],
            ]);
        }


        /*
    |--------------------------------------------------------------------------
    | ICY Kids 2
    |--------------------------------------------------------------------------
    */
        $ik2 = Subject::where('name', 'ICY Kids 2')->first();

        $lessons_ik2 = [
            [1, "Review Starter & Unit 7", "clothes, family, school items", "This/That/These/Those", "Review games + pair speaking", "Recall vocabulary and grammar from ICY Kids 1"],
            [2, "Unit 8: Where’s Grandma? – Lesson 1", "kitchen, bedroom, bathroom, living room", "Is she in the kitchen?", "Draw and label rooms", "Identify rooms in a house"],
            [3, "Unit 8: Where’s Grandma? – Lesson 2", "table, chair, sofa, TV", "in/on/under", "Find Grandma activity", "Use prepositions to describe location"],
            [4, "Unit 8: Where’s Grandma? – Lesson 3", "lamp, bed, wardrobe, mirror", "There is/There are", "Workbook + listening task", "Describe a house and furniture"],
            [5, "Unit 9: Lunchtime! – Lesson 1", "apple, banana, sandwich, juice", "I’ve got …", "Lunchbox drawing", "Talk about what food you have"],
            [6, "Unit 9: Lunchtime! – Lesson 2", "rice, milk, water, cake", "A/an, some, any", "Food sorting game", "Use quantifiers correctly"],
            [7, "Unit 9: Lunchtime! – Lesson 3", "pizza, salad, chicken, soup", "Conjunctions and/with", "Menu design project", "Combine ideas to describe meals"],
            [8, "Unit 10: A new friend! – Lesson 1", "friend, hair, eyes, tall", "He’s/She’s got …", "Friend description activity", "Describe friends’ features and likes"],
            [9, "Unit 10: A new friend! – Lesson 2", "glasses, short, long, strong", "Has he/she got …?", "Interview classmates", "Ask and answer about people"],
            [10, "Unit 10: A new friend! – Lesson 3", "funny, kind, quiet, noisy", "Adjectives", "Draw + describe a new friend", "Use adjectives to describe people"],
            [11, "Unit 11: I like monkeys! – Lesson 1", "monkey, lion, giraffe, zebra", "I like / I don’t like", "Animal picture cards", "Express likes and dislikes"],
            [12, "Unit 11: I like monkeys! – Lesson 2", "elephant, tiger, bear, hippo", "Do you like …?", "Animal survey", "Ask and answer about preferences"],
            [13, "Mid-term Test", "review vocabulary & grammar Units 8–10", "All grammar points", "Written + speaking test", "Assess understanding of first half of course"],
            [14, "Unit 12: Dinnertime! – Lesson 1", "carrot, tomato, potato, juice", "Do you like carrots?", "Menu selection activity", "Talk about food preferences"],
            [15, "Unit 12: Dinnertime! – Lesson 2", "bread, pasta, cheese, fish", "Yes, I do / No, I don’t", "Cookbook project", "Write sentences about favorite food"],
            [16, "Unit 13: Tidy up! – Lesson 1", "bedroom, desk, shelf, toys", "There’s / There are", "Bedroom map drawing", "Describe a room layout"],
            [17, "Unit 13: Tidy up! – Lesson 2", "11–20", "Numbers 11–20", "Counting practice", "Number games", "Count and use numbers accurately"],
            [18, "Unit 14: Action Boy can run! – Lesson 1", "jump, swim, run, read", "He can / He can’t", "Action mime game", "Use can/can’t to describe abilities"],
            [19, "Unit 14: Action Boy can run! – Lesson 2", "dance, draw, sing, write", "Can you …?", "Class action challenge", "Ask and answer about abilities"],
            [20, "Unit 15: Let’s play ball! – Lesson 1", "ball, beach, bat, net", "Let’s + verb", "Group game: sports plan", "Make invitations using Let’s"],
            [21, "Unit 15: Let’s play ball! – Lesson 2", "sand, sea, shell, swim", "Identifying verbs", "Draw & describe a beach scene", "Identify and use action verbs correctly"],
            [22, "Fluency Time & Review 4–5", "review words Units 8–15", "All structures", "Role plays + storytelling", "Apply all learned skills in speaking"],
            [23, "Project: My Dream House", "house, food, family", "There is/There are, I like …", "Create and present a poster", "Integrate multiple topics into creative presentation"],
            [24, "Final Test", "all Units 8–15", "Comprehensive review", "Final written + oral test", "Demonstrate mastery of Units 8–15"]
        ];

        foreach ($lessons_ik2 as $lesson) {
            $ik2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content' => $lesson[1],
                'vocabulary' => $lesson[2],
                'grammar' => $lesson[3],
                'assignment' => $lesson[4],
                'CLO' => $lesson[5],
            ]);
        }


        /*
    |--------------------------------------------------------------------------
    | ICY Kids 3
    |--------------------------------------------------------------------------
    */
        $ik3 = Subject::where('name', 'ICY Kids 3')->first();

        $lessons_ik3 = [
            [1, "Starter: Welcome Back!", "family, colours, toys", "There is / There are", "Introduction games + vocabulary review", "Review basic English skills from previous level"],
            [2, "Unit 1: Our new things – Lesson 1", "school bag, pen, ruler, notebook", "This/That/These/Those", "Label classroom objects", "Identify and describe school supplies"],
            [3, "Unit 1: Our new things – Lesson 2", "book, eraser, desk, chair", "How many …?", "Counting classroom items", "Ask and answer quantity questions"],
            [4, "Unit 1: Our new things – Lesson 3", "pencil, crayons, board, window", "Singular/Plural nouns", "Workbook + quiz", "Use plural forms and demonstratives accurately"],
            [5, "Unit 2: They’re happy now! – Lesson 1", "happy, sad, angry, scared", "We’re/They’re …", "Emotion flashcards", "Describe people’s feelings using correct verbs"],
            [6, "Unit 2: They’re happy now! – Lesson 2", "excited, tired, bored, cold", "Are they …?", "Guess the feeling game", "Ask and answer about emotions"],
            [7, "Unit 2: They’re happy now! – Lesson 3", "hungry, thirsty, hot, sleepy", "He/She isn’t …", "Workbook activity", "Use negative forms correctly"],
            [8, "Unit 3: I can ride a bike! – Lesson 1", "bike, skateboard, swim, read", "Can/Can’t", "Action charades", "Express ability using can/can’t"],
            [9, "Unit 3: I can ride a bike! – Lesson 2", "behind, in front of, near, next to", "Prepositions of place", "Map drawing activity", "Describe locations using prepositions"],
            [10, "Unit 3: I can ride a bike! – Lesson 3", "run, jump, climb, dance", "Can he/she …?", "Pair work questions", "Ask and answer about abilities"],
            [11, "Fluency Time 1 + Review 1", "review vocabulary Units 1–3", "Review structures", "Speaking & listening review games", "Reinforce learning and fluency"],
            [12, "Unit 4: Have you got a milkshake? – Lesson 1", "milkshake, burger, juice, fries", "Have you got …?", "Shopping role play", "Ask and answer about food items"],
            [13, "Mid-term Test", "review Units 1–3", "All grammar points", "Written + oral test", "Evaluate progress in first half of course"],
            [14, "Unit 4: Have you got a milkshake? – Lesson 2", "ice cream, salad, cake, soup", "I have / I haven’t", "Menu design project", "Talk about food preferences"],
            [15, "Unit 5: We’ve got English! – Lesson 1", "Math, English, Music, PE", "What/When have we got …?", "Timetable activity", "Talk about school subjects and schedule"],
            [16, "Unit 5: We’ve got English! – Lesson 2", "library, gym, computer room, art room", "We’ve got … / We haven’t got …", "School map labeling", "Use correct structures for rooms and subjects"],
            [17, "Unit 6: Let’s play after school! – Lesson 1", "tennis, club, pool, library", "I visit … / I go to …", "Hobby interview", "Talk about free-time activities"],
            [18, "Unit 6: Let’s play after school! – Lesson 2", "football, chess, piano, dance", "Do you go …?", "Pair interview worksheet", "Ask and answer about activities and routines"],
            [19, "Unit 6: Let’s play after school! – Lesson 3", "routine, morning, afternoon, evening", "Present simple", "Journal writing", "Write short sentences about daily routines"],
            [20, "Unit 7: Let’s buy presents! – Lesson 1", "ball, doll, teddy, robot", "What does he/she like?", "Gift shop role play", "Ask and answer about preferences"],
            [21, "Unit 7: Let’s buy presents! – Lesson 2", "card, cake, game, toy", "He likes / She doesn’t like", "Create a birthday card", "Use like/don’t like correctly in writing"],
            [22, "Fluency Time 2 + Review 2", "review words Units 4–7", "All grammar", "Games and dialogues", "Consolidate understanding of all grammar points"],
            [23, "Project: Market Poster", "apple, cola, vegetables, sandwich", "Have got / Can / Like", "Create and present a market poster", "Integrate learned vocabulary creatively"],
            [24, "Final Test", "all Units 1–7", "Comprehensive review", "Final written + oral exam", "Demonstrate overall course achievement"]
        ];

        foreach ($lessons_ik3 as $lesson) {
            $ik3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content' => $lesson[1],
                'vocabulary' => $lesson[2],
                'grammar' => $lesson[3],
                'assignment' => $lesson[4],
                'CLO' => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 4
    |--------------------------------------------------------------------------
    */

        $ik4 = Subject::where('name', 'ICY Kids 4')->first();
        $lessons_ik4 = [
            [1, "Review Starter & Unit 7", "special days, presents", "Like / doesn’t like", "Review and warm-up games", "Recall key vocabulary and grammar from ICY Kids 3"],
            [2, "Unit 8: What’s the time? – Lesson 1", "everyday activities", "What’s the time? It’s …", "Clock reading activity", "Tell and ask about time"],
            [3, "Unit 8: What’s the time? – Lesson 2", "daily routines", "He/She … at … o’clock", "Daily schedule writing", "Describe routines using time expressions"],
            [4, "Unit 8: What’s the time? – Lesson 3", "times of the day", "At + time", "Worksheet and speaking pairs", "Use prepositions of time correctly"],
            [5, "Unit 9: Where does she work? – Lesson 1", "places", "Where does … work?", "Matching jobs and places", "Ask and answer about professions and workplaces"],
            [6, "Unit 9: Where does she work? – Lesson 2", "places & activities", "He works in … / She works at …", "Role-play: My dream job", "Use present simple to describe jobs"],
            [7, "Unit 9: Where does she work? – Lesson 3", "occupations", "Does he/she work …?", "Job guessing game", "Form and answer yes/no questions correctly"],
            [8, "Fluency Time 3 + Review 3", "vocabulary Units 8–9", "Revision", "Review and pair dialogues", "Review and apply key phrases in conversation"],
            [9, "Unit 10: It’s hot today! – Lesson 1", "weather", "What’s the weather like?", "Weather card game", "Identify and describe different types of weather"],
            [10, "Unit 10: It’s hot today! – Lesson 2", "weather & clothes", "It’s + adjective", "Weather chart writing", "Describe weather conditions using adjectives"],
            [11, "Unit 11: What are you wearing? – Lesson 1", "clothes", "What are you wearing?", "Fashion show activity", "Describe what people are wearing using present continuous"],
            [12, "Unit 11: What are you wearing? – Lesson 2", "clothes", "He’s/She’s wearing …", "Matching clothes and people", "Use present continuous for describing pictures"],
            [13, "Mid-term Test", "review Units 8–10", "All grammar points", "Written + speaking test", "Assess understanding of Units 8–10"],
            [14, "Unit 12: You’re sleeping! – Lesson 1", "celebrations", "What are they doing?", "Photo sequence activity", "Use present continuous to describe ongoing actions"],
            [15, "Unit 12: You’re sleeping! – Lesson 2", "celebrations", "They’re … / He’s …", "Party planning project", "Describe people and actions at parties"],
            [16, "Unit 13: Look at all the animals! – Lesson 1", "farm animals", "Comparatives: bigger than, smaller than", "Animal comparison game", "Use comparatives to describe animals"],
            [17, "Unit 13: Look at all the animals! – Lesson 2", "animals", "This cow is … than that cow", "Animal race activity", "Compare animals using adjectives"],
            [18, "Unit 14: Look at the photos! – Lesson 1", "memories", "Past simple: was/were", "Photo diary writing", "Use past tense to describe past experiences"],
            [19, "Unit 14: Look at the photos! – Lesson 2", "past time expressions", "Was / wasn’t / were / weren’t", "Timeline exercise", "Use past simple in negative form correctly"],
            [20, "Unit 15: Well done! – Lesson 1", "stories & feelings", "There were / wasn’t / weren’t", "Story sequencing activity", "Use past simple to retell events"],
            [21, "Unit 15: Well done! – Lesson 2", "irregular verbs", "Irregular past forms", "Mini story project", "Recognize and use irregular verbs in context"],
            [22, "Fluency Time 5 + Review 5", "vocabulary Units 11–15", "All grammar structures", "Speaking games + role plays", "Review and apply full unit content fluently"],
            [23, "Project: My Storybook", "weather, clothes, animals", "Past simple / present continuous", "Create and present a short illustrated story", "Integrate multiple grammar points into storytelling"],
            [24, "Final Test", "all Units 8–15", "Comprehensive review", "Final written + oral test", "Demonstrate complete course mastery"]
        ];

        foreach ($lessons_ik4 as $lesson) {
            $ik4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content' => $lesson[1],
                'vocabulary' => $lesson[2],
                'grammar' => $lesson[3],
                'assignment' => $lesson[4],
                'CLO' => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 5
    |--------------------------------------------------------------------------
    */

        $ik5 = Subject::where('name', 'ICY Kids 5')->first();

        $lessons_ik5 = [
            [1, "Starter: Hello!", "greetings, numbers 1–10, colors", "Be verb, simple greetings", "Workbook: introduce yourself, color worksheet", "Use greetings and basic personal information"],
            [2, "Unit 1: I love animals! – Lesson 1", "animals", "I like / I don’t like", "Animal picture cards activity", "Express likes and dislikes about animals"],
            [3, "Unit 1: I love animals! – Lesson 2", "animal names and actions", "Can / can’t", "Animal charades game", "Talk about animal abilities using can/can’t"],
            [4, "Unit 2: At home – Lesson 1", "rooms in a house", "There is / There are", "House labeling project", "Identify and describe rooms in a home"],
            [5, "Unit 2: At home – Lesson 2", "furniture and objects", "Prepositions of place (in/on/under)", "Where is it? game", "Use prepositions to describe object locations"],
            [6, "Unit 3: Family and friends – Lesson 1", "family members", "Possessive ’s", "Family tree drawing", "Talk about family relationships using possessives"],
            [7, "Unit 3: Family and friends – Lesson 2", "friends and people", "He’s/She’s got …", "Friend description writing", "Describe people’s appearance and relationships"],
            [8, "Unit 4: Food! – Lesson 1", "food items", "I like / I don’t like", "Food sorting activity", "Talk about preferences using food vocabulary"],
            [9, "Unit 4: Food! – Lesson 2", "meals", "Have got / Has got", "My lunchbox project", "Describe what you have for meals"],
            [10, "Unit 5: I like clothes – Lesson 1", "clothes vocabulary", "This / That / These / Those", "Fashion show activity", "Identify and describe clothing items"],
            [11, "Unit 5: I like clothes – Lesson 2", "colors & clothes", "What are you wearing?", "Drawing & labeling activity", "Describe outfits using present continuous"],
            [12, "Review 1 + Fluency Time", "vocabulary from Units 1–5", "All covered grammar", "Speaking games + listening test", "Reinforce grammar and vocabulary from Units 1–5"],
            [13, "Mid-term Test", "review Units 1–3", "All grammar points", "Written and oral test", "Assess understanding of first half of the course"],
            [14, "Unit 6: Look at us! – Lesson 1", "body parts", "Have got / Has got", "Body labeling worksheet", "Identify body parts and describe features"],
            [15, "Unit 6: Look at us! – Lesson 2", "physical appearance", "Adjectives (tall, short, big, small)", "Draw your friend activity", "Use adjectives to describe people"],
            [16, "Unit 7: We love school! – Lesson 1", "school objects", "Where’s my …?", "School treasure hunt", "Ask and answer about school items’ locations"],
            [17, "Unit 7: We love school! – Lesson 2", "subjects and routines", "Days of the week", "Weekly schedule project", "Talk about school subjects and routines"],
            [18, "Fluency Time + Review 2", "Units 6–7 vocabulary", "All grammar points", "Games, songs, and quiz", "Consolidate knowledge and improve fluency"],
            [19, "Project: My School Poster", "school & friends vocabulary", "Present simple", "Create and present a poster", "Use learned topics in a creative project"],
            [20, "Listening & Speaking Practice", "all Units 1–7 topics", "All grammar structures", "Interactive Q&A + role play", "Enhance pronunciation and speaking skills"],
            [21, "Writing Workshop", "all Units 1–7", "Grammar review", "Write your story about school and home", "Apply learned grammar in writing"],
            [22, "Revision and Games", "all Units", "All grammar points", "Group games and review", "Reinforce content through fun activities"],
            [23, "Mock Test + Oral Practice", "all Units 1–7", "Integrated skills", "Practice test + speaking test", "Prepare for final assessment"],
            [24, "Final Test", "all Units 1–7", "Comprehensive review", "Final written and oral exam", "Demonstrate overall mastery of course content"]
        ];

        foreach ($lessons_ik5 as $lesson) {
            $ik5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 6
    |--------------------------------------------------------------------------
    */
        $ik6 = Subject::where('name', 'ICY Kids 6')->first();

        $lessons_ik6 = [
            [1, "Review Starter & Units 1–7", "animals, family, food, clothes", "Present simple / have got / can", "Warm-up games + review worksheet", "Recall and consolidate previous course topics"],
            [2, "Unit 8: In the playground – Lesson 1", "playground equipment, actions", "Present continuous (affirmative)", "Drawing playground scene", "Describe what people are doing"],
            [3, "Unit 8: In the playground – Lesson 2", "outdoor activities", "Present continuous (negative/questions)", "Role-play activity", "Ask and answer about ongoing actions"],
            [4, "Unit 9: My hobbies – Lesson 1", "hobbies and sports", "Like + verb-ing", "Class survey: Hobbies", "Talk about favorite hobbies using like + verb-ing"],
            [5, "Unit 9: My hobbies – Lesson 2", "indoor and outdoor hobbies", "I don’t like / I love …", "Poster project: My hobby time", "Express opinions about hobbies"],
            [6, "Unit 10: Your day – Lesson 1", "daily routines", "Present simple (I get up at …)", "Daily routine chart", "Describe personal daily routines"],
            [7, "Unit 10: Your day – Lesson 2", "time, school day", "What time do you …?", "Pair interview + clock game", "Ask and answer about times and routines"],
            [8, "Fluency Time + Review 1", "Units 8–10 vocabulary", "All grammar points", "Games + oral review", "Reinforce fluency and grammar control"],
            [9, "Unit 11: In the street – Lesson 1", "places in town", "There is / There are", "Town map project", "Describe what is in your town"],
            [10, "Unit 11: In the street – Lesson 2", "transport and movement", "Prepositions of place", "Directions activity", "Give and understand directions"],
            [11, "Unit 12: My grandparents – Lesson 1", "family members, jobs", "Past simple (was/were)", "Family timeline project", "Describe past family events"],
            [12, "Unit 12: My grandparents – Lesson 2", "old and new objects", "Past simple (affirmative/negative)", "Then and now comparison", "Compare past and present experiences"],
            [13, "Mid-term Test", "review Units 8–10", "Present simple / continuous / like + V-ing", "Written and oral test", "Assess understanding of the first half of the course"],
            [14, "Unit 13: Going to the zoo – Lesson 1", "animals & nature", "Can / can’t", "Zoo map activity", "Describe animal abilities"],
            [15, "Unit 13: Going to the zoo – Lesson 2", "wild animals", "Have got / has got", "Animal card game", "Talk about animals and their features"],
            [16, "Unit 14: Happy birthday! – Lesson 1", "parties & gifts", "Let’s + verb", "Birthday invitation project", "Make invitations using Let’s"],
            [17, "Unit 14: Happy birthday! – Lesson 2", "celebrations", "Imperatives", "Role-play: party planning", "Give commands and suggestions"],
            [18, "Unit 15: At the beach – Lesson 1", "beach items & activities", "There’s / There are", "Drawing: My beach day", "Describe a day at the beach"],
            [19, "Unit 15: At the beach – Lesson 2", "summer fun", "Prepositions of place review", "Game: Where is it?", "Use prepositions to describe beach scenes"],
            [20, "Fluency Time + Review 2", "Units 11–15 vocabulary", "All grammar points", "Quiz + role play", "Consolidate all vocabulary and structures"],
            [21, "Project: My Family Weekend", "family, hobbies, places", "Present simple / past simple", "Poster creation + presentation", "Integrate topics into storytelling"],
            [22, "Revision & Speaking Games", "all Units 8–15", "All grammar points", "Interactive review", "Improve spontaneous speaking ability"],
            [23, "Mock Test + Oral Practice", "all topics", "Integrated grammar and skills", "Mock written + oral test", "Prepare for final assessment"],
            [24, "Final Test", "all Units 8–15", "Comprehensive review", "Final written and oral exam", "Demonstrate full course achievement"]
        ];

        foreach ($lessons_ik6 as $lesson) {
            $ik6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 7
    |--------------------------------------------------------------------------
    */

        $ik7 = Subject::where('name', 'ICY Kids 7')->first();

        $lessons_ik7 = [
            [1, "Starter: My family", "family members, months", "Be verb, Wh- questions", "Speaking: introduce family, Workbook: birthday calendar", "Recall and use basic family and time vocabulary"],
            [2, "Unit 1: They’re from Australia! – Lesson 1", "countries, nationalities", "Present simple: be", "Map activity + speaking practice", "Identify countries and talk about where people are from"],
            [3, "Unit 1: They’re from Australia! – Lesson 2", "home, countries", "Wh- questions: Where are you from?", "Pair interviews", "Ask and answer about origin and nationality"],
            [4, "Unit 1: They’re from Australia! – Lesson 3", "countries", "Short answers", "Workbook + matching flags", "Use short answers correctly with be verb"],
            [5, "Unit 2: My weekend – Lesson 1", "hobbies", "Like + verb-ing", "Hobby chart activity", "Talk about hobbies using correct structures"],
            [6, "Unit 2: My weekend – Lesson 2", "activities", "Do/Does questions", "Class survey: weekend activities", "Ask and answer about weekend plans"],
            [7, "Unit 2: My weekend – Lesson 3", "hobbies", "Yes/No answers", "Workbook + dialogue practice", "Use Do/Does questions in conversation"],
            [8, "Unit 3: My things – Lesson 1", "personal items", "Have got / Has got", "Show & Tell: favorite thing", "Describe personal belongings using have got"],
            [9, "Unit 3: My things – Lesson 2", "collections", "Whose …? Possessive ’s", "Find the owner game", "Ask and answer about possessions"],
            [10, "Unit 3: My things – Lesson 3", "items", "Can / Can’t", "Class survey + mini test", "Use can/can’t to express ability"],
            [11, "Fluency Time 1 + Review 1", "Units 1–3 vocabulary", "Review structures", "Speaking + listening tasks", "Reinforce learned grammar and vocabulary"],
            [12, "Unit 4: We’re having fun at the beach! – Lesson 1", "beach activities", "Present continuous (affirmative)", "Describe the beach picture", "Talk about current actions using present continuous"],
            [13, "Mid-term Test", "review Units 1–3", "All grammar points", "Written + oral test", "Assess first-half learning outcomes"],
            [14, "Unit 4: We’re having fun at the beach! – Lesson 2", "outdoor activities", "Present continuous (negative)", "Worksheet + pair practice", "Form negative sentences with present continuous"],
            [15, "Unit 5: A naughty monkey! – Lesson 1", "zoo animals", "Present continuous (questions)", "Zoo description activity", "Ask and answer about animals’ actions"],
            [16, "Unit 5: A naughty monkey! – Lesson 2", "adjectives", "Is it …? / Are they …?", "Animal adjectives game", "Describe animals using adjectives correctly"],
            [17, "Unit 6: Jim’s day – Lesson 1", "daily routine", "Present simple affirmative/negative", "Routine timeline project", "Describe daily routines using present simple"],
            [18, "Unit 6: Jim’s day – Lesson 2", "time & activities", "What time do you …?", "Write your daily routine", "Ask and answer about daily activities"],
            [19, "Unit 6: Jim’s day – Lesson 3", "routines", "Adverbs of frequency", "Frequency chart game", "Use adverbs of frequency to describe habits"],
            [20, "Unit 7: Places to go! – Lesson 1", "places in town", "Present simple + adverbs of frequency", "Town map + speaking practice", "Talk about places people visit and how often"],
            [21, "Unit 7: Places to go! – Lesson 2", "performances", "When is …? / What time …?", "Invitation writing", "Ask and answer about times and events"],
            [22, "Fluency Time 2 + Review 2", "Units 4–7 vocabulary", "All grammar structures", "Games + role play", "Review and consolidate Units 4–7"],
            [23, "Project: My Weekend Poster", "hobbies, routines, time", "Present simple + continuous", "Create and present poster", "Integrate grammar and vocabulary into creative presentation"],
            [24, "Final Test", "All Units 1–7", "Comprehensive review", "Final written + oral test", "Demonstrate full understanding of course content"]
        ];

        foreach ($lessons_ik7 as $lesson) {
            $ik7->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 8
    |--------------------------------------------------------------------------
    */
        $ik8 = Subject::where('name', 'ICY Kids 8')->first();

        $lessons_ik8 = [
            [1, "Review Starter & Unit 7", "family, hobbies, routines", "Present simple & continuous", "Warm-up games and review worksheets", "Recall grammar and vocabulary from ICY Kids 7"],
            [2, "Unit 8: I’d like a melon! – Lesson 1", "food", "Countable & uncountable nouns", "Shopping list activity", "Identify and categorize food items"],
            [3, "Unit 8: I’d like a melon! – Lesson 2", "food, market", "I’d like / Would you like …?", "Market role play", "Order and request food politely"],
            [4, "Unit 8: I’d like a melon! – Lesson 3", "quantities", "Some / any / a / an", "Cooking recipe writing", "Use quantifiers correctly in sentences"],
            [5, "Unit 9: The fastest animal in the world – Lesson 1", "animals", "Comparative adjectives", "Animal speed quiz", "Compare animals using comparatives"],
            [6, "Unit 9: The fastest animal in the world – Lesson 2", "places", "Superlative adjectives", "World record activity", "Use superlatives to describe extremes"],
            [7, "Unit 9: The fastest animal in the world – Lesson 3", "geography", "Review comparatives/superlatives", "Project: Map of the world", "Apply descriptive language in geography context"],
            [8, "Fluency Time 3 + Review 3", "vocabulary from Units 8–9", "Review grammar", "Pair speaking & quiz", "Consolidate vocabulary and grammar fluency"],
            [9, "Unit 10: In the park! – Lesson 1", "outdoor activities", "Must / mustn’t", "Classroom rules writing", "Express rules and obligations"],
            [10, "Unit 10: In the park! – Lesson 2", "verbs of obligation", "Have to / Don’t have to", "Park safety project", "Use modals to describe responsibilities"],
            [11, "Unit 11: In the museum – Lesson 1", "transport & places", "Past simple (affirmative)", "Timeline activity", "Talk about past events using past simple"],
            [12, "Unit 11: In the museum – Lesson 2", "historical events", "Past simple (negative & questions)", "History quiz", "Ask and answer questions in past simple"],
            [13, "Mid-term Test", "review Units 8–10", "All grammar points", "Written + speaking test", "Evaluate first half of course"],
            [14, "Unit 12: A clever baby! – Lesson 1", "adjectives & people", "Present perfect with be and have", "Family story project", "Use present perfect to describe experiences"],
            [15, "Unit 12: A clever baby! – Lesson 2", "describing people", "Present perfect (negative/questions)", "Interview activity", "Ask and answer about life experiences"],
            [16, "Unit 13: The Ancient Egyptians – Lesson 1", "history", "Past simple (regular verbs)", "Ancient Egypt timeline", "Describe past events in sequence"],
            [17, "Unit 13: The Ancient Egyptians – Lesson 2", "verbs & time expressions", "Past simple (irregular verbs)", "Pyramid-building project", "Use irregular verbs in storytelling"],
            [18, "Unit 14: Did you have a good day? – Lesson 1", "daily routine", "Past simple (questions)", "Diary writing", "Write and speak about past experiences"],
            [19, "Unit 14: Did you have a good day? – Lesson 2", "school activities", "Past simple (affirmative/negative)", "Photo story creation", "Describe school trips using past tense"],
            [20, "Unit 15: Our holiday! – Lesson 1", "travel & vacation", "Be going to + verb", "Holiday plan project", "Talk about future intentions using be going to"],
            [21, "Unit 15: Our holiday! – Lesson 2", "future plans", "Will vs. be going to", "Future postcard writing", "Differentiate between planned and spontaneous actions"],
            [22, "Fluency Time 5 + Review 5", "vocabulary Units 11–15", "All grammar structures", "Speaking and writing games", "Reinforce all skills before final test"],
            [23, "Project: My Photo Album", "family, travel, school", "Past simple & future forms", "Create and present a photo story", "Integrate past and future tenses in creative project"],
            [24, "Final Test", "all Units 8–15", "Comprehensive review", "Final written + oral test", "Demonstrate overall mastery of grammar and communication skills"]
        ];

        foreach ($lessons_ik8 as $lesson) {
            $ik8->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 9
    |--------------------------------------------------------------------------
    */
        $ik9 = Subject::where('name', 'ICY Kids 9')->first();

        $lessons_ik9 = [
            [1, "Starter: Back together", "food words, time expressions", "Be going to / can for permission", "Class discussion: summer memories", "Review key grammar and vocabulary from previous course"],
            [2, "Unit 1: The food here is great! – Lesson 1", "restaurants, food", "Present simple & present continuous", "Menu creation activity", "Talk about eating habits and restaurants"],
            [3, "Unit 1: The food here is great! – Lesson 2", "eating habits", "Adverbs of frequency", "Survey: eating habits", "Use frequency adverbs in daily conversation"],
            [4, "Unit 1: The food here is great! – Lesson 3", "food and drinks", "Some / any / a / an", "Workbook + group quiz", "Use quantifiers accurately in context"],
            [5, "Unit 2: We had a concert – Lesson 1", "music and events", "Past simple (regular verbs)", "Concert diary writing", "Describe past events using past simple"],
            [6, "Unit 2: We had a concert – Lesson 2", "instruments, activities", "Past simple (irregular verbs)", "Interview about favorite concerts", "Use irregular past forms fluently"],
            [7, "Unit 2: We had a concert – Lesson 3", "hobbies & events", "Past time expressions", "Timeline creation", "Sequence events correctly in the past"],
            [8, "Unit 3: The dinosaur museum – Lesson 1", "history & science", "Past simple negatives", "Fossil hunt game", "Ask and answer using past simple negatives"],
            [9, "Unit 3: The dinosaur museum – Lesson 2", "dinosaurs & animals", "Past simple questions", "Museum project", "Ask questions and give answers in past simple"],
            [10, "Unit 3: The dinosaur museum – Lesson 3", "animals & exhibits", "Did + base verb", "Reading + workbook", "Write short paragraphs about museum exhibits"],
            [11, "Fluency Time 1 + Review 1", "vocabulary Units 1–3", "All past tenses", "Games + oral review", "Reinforce grammar and vocabulary fluency"],
            [12, "Unit 4: Whose jacket is this? – Lesson 1", "sports items", "Possessive pronouns", "Lost and found role play", "Use possessive forms correctly"],
            [13, "Mid-term Test", "review Units 1–3", "All grammar points", "Written and speaking test", "Assess first-half progress"],
            [14, "Unit 4: Whose jacket is this? – Lesson 2", "sports & fashion", "Irregular plurals", "Sports magazine project", "Write short articles using possessive pronouns"],
            [15, "Unit 5: Go back to the roundabout – Lesson 1", "directions", "Have to / Don’t have to", "Map navigation activity", "Give and follow directions"],
            [16, "Unit 5: Go back to the roundabout – Lesson 2", "places & travel", "Why / Because", "Webpage reading + quiz", "Explain reasons using because"],
            [17, "Unit 6: The best bed! – Lesson 1", "descriptive adjectives", "Comparatives & superlatives", "Fable writing activity", "Use comparatives and superlatives correctly"],
            [18, "Unit 6: The best bed! – Lesson 2", "stories & animals", "Irregular comparatives", "Story retelling", "Describe characters using comparative adjectives"],
            [19, "Unit 6: The best bed! – Lesson 3", "descriptive words", "Adjective order", "Drawing and description", "Use adjective order in noun phrases"],
            [20, "Unit 7: Will it really happen? – Lesson 1", "space & planets", "Future with will", "Prediction quiz", "Make predictions using will"],
            [21, "Unit 7: Will it really happen? – Lesson 2", "future events", "Be going to", "Magazine article writing", "Differentiate between will and be going to"],
            [22, "Fluency Time 2 + Review 2", "vocabulary Units 4–7", "All grammar structures", "Speaking games + dialogues", "Consolidate learned grammar in conversation"],
            [23, "Project: My Future Journal", "future plans, travel", "Will / Be going to", "Create and present future plan booklet", "Integrate all grammar into creative writing"],
            [24, "Final Test", "all Units 1–7", "Comprehensive review", "Final written and oral test", "Demonstrate mastery of ICY Kids 9 content"]
        ];

        foreach ($lessons_ik9 as $lesson) {
            $ik9->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 10
    |--------------------------------------------------------------------------
    */
        $ik10 = Subject::where('name', 'ICY Kids 10')->first();

        $lessons_ik10 = [
            [1, "Review Starter & Unit 7", "space, future events", "Future with will / be going to", "Warm-up and group discussion", "Recall and consolidate previous units’ grammar and vocab"],
            [2, "Unit 8: How much time have we got? – Lesson 1", "at the airport, time expressions", "Expressing quantity", "Airport role play", "Ask and answer about time and quantity"],
            [3, "Unit 8: How much time have we got? – Lesson 2", "travel plans", "How much / How many", "Travel schedule project", "Use quantifiers correctly in conversations"],
            [4, "Unit 8: How much time have we got? – Lesson 3", "vacations", "Have got / Has got", "Vacation diary activity", "Describe travel situations using have got"],
            [5, "Unit 9: Something new to watch! – Lesson 1", "TV shows, movies", "Infinitive of purpose", "TV guide design", "Explain reasons and purposes with infinitives"],
            [6, "Unit 9: Something new to watch! – Lesson 2", "entertainment", "Present simple (habits)", "Favorite TV show presentation", "Talk about daily entertainment routines"],
            [7, "Unit 9: Something new to watch! – Lesson 3", "hobbies", "Adverbs of frequency", "Survey about hobbies", "Describe habits using adverbs correctly"],
            [8, "Fluency Time 3 + Review 3", "vocabulary Units 8–9", "All grammar points", "Speaking review & quiz", "Reinforce fluency and comprehension of Units 8–9"],
            [9, "Unit 10: I've printed my homework – Lesson 1", "computers & school work", "Present perfect affirmative", "Computer lab project", "Talk about completed actions using present perfect"],
            [10, "Unit 10: I've printed my homework – Lesson 2", "technology", "Have you …? / Yes, I have.", "Interview classmates", "Form and answer present perfect questions"],
            [11, "Unit 11: Have you ever been there? – Lesson 1", "travel & experiences", "Present perfect (ever/never)", "Travel story sharing", "Discuss life experiences using ever/never"],
            [12, "Unit 11: Have you ever been there? – Lesson 2", "places & exploration", "Present perfect (questions/answers)", "Tourist blog writing", "Write short entries about travel experiences"],
            [13, "Mid-term Test", "review Units 8–10", "All grammar points", "Written + oral test", "Evaluate understanding of the first half of the course"],
            [14, "Unit 12: What’s the matter? – Lesson 1", "health & body", "Should / shouldn’t", "Health advice game", "Give and understand advice using should/shouldn’t"],
            [15, "Unit 12: What’s the matter? – Lesson 2", "health & hospitals", "Have got + aches", "Doctor role play", "Talk about health problems correctly"],
            [16, "Unit 13: Can you help me? – Lesson 1", "jobs & helping people", "Object pronouns", "Job interview game", "Use object pronouns in context"],
            [17, "Unit 13: Can you help me? – Lesson 2", "occupations", "Relative pronouns (who/that)", "Job description activity", "Write about people using relative clauses"],
            [18, "Unit 14: We were fishing – Lesson 1", "family & leisure", "Past continuous", "Story sequence exercise", "Describe past actions in progress"],
            [19, "Unit 14: We were fishing – Lesson 2", "past activities", "Past simple vs continuous", "Story reconstruction", "Distinguish between past simple and continuous"],
            [20, "Unit 15: Good news, bad news – Lesson 1", "jobs & achievements", "Past simple and present perfect review", "Story writing task", "Connect past and present experiences in writing"],
            [21, "Unit 15: Good news, bad news – Lesson 2", "communication", "Reported speech basics", "News report role play", "Report information in indirect speech"],
            [22, "Fluency Time 5 + Review 5", "vocabulary Units 11–15", "All grammar points", "Speaking + writing games", "Integrate and review all structures before final test"],
            [23, "Project: My Digital Diary", "travel, work, family", "Present perfect / Past continuous", "Create and present digital diary", "Synthesize language into multimedia project"],
            [24, "Final Test", "all Units 8–15", "Comprehensive review", "Final written + oral test", "Demonstrate overall course achievement"]
        ];

        foreach ($lessons_ik10 as $lesson) {
            $ik10->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 11
    |--------------------------------------------------------------------------
    */
        $ik11 = Subject::where('name', 'ICY Kids 11')->first();

        $lessons_ik11 = [
            [1, "Starter: Where do you live?", "countries, homes, greetings", "Be verb, Wh- questions", "Map activity + introductions", "Use be verb and questions to talk about place of living"],
            [2, "Unit 1: At the park – Lesson 1", "park places, nature", "There is / There are", "Describe park picture", "Describe outdoor places using there is/are"],
            [3, "Unit 1: At the park – Lesson 2", "activities at the park", "Prepositions of place", "Where is it? game", "Use prepositions to describe position of objects"],
            [4, "Unit 1: At the park – Lesson 3", "animals and people", "Can / Can’t", "Who can...? guessing game", "Talk about abilities using can/can’t"],
            [5, "Unit 2: A busy week – Lesson 1", "days of the week, daily activities", "Present simple", "My weekly planner", "Use present simple to describe routines"],
            [6, "Unit 2: A busy week – Lesson 2", "school & free-time activities", "Adverbs of frequency", "Class survey: how often?", "Use frequency adverbs to talk about habits"],
            [7, "Unit 2: A busy week – Lesson 3", "daily schedules", "What time do you...?", "Time bingo", "Talk about times and routines accurately"],
            [8, "Unit 3: In the town – Lesson 1", "town places (bank, park, shop)", "There’s / There are", "Town map project", "Describe your town using there is/are"],
            [9, "Unit 3: In the town – Lesson 2", "shops and people", "Wh- questions (Where/What/Who)", "Town role-play activity", "Ask and answer about places and people"],
            [10, "Unit 3: In the town – Lesson 3", "directions", "Imperatives (Go straight / Turn left)", "Find the treasure game", "Give and follow directions correctly"],
            [11, "Fluency Time + Review 1", "Units 1–3 vocabulary", "All grammar points", "Games + pair dialogues", "Reinforce grammar and speaking fluency"],
            [12, "Unit 4: At home – Lesson 1", "rooms, furniture", "Have got / Has got", "My dream house drawing", "Talk about things you have at home"],
            [13, "Mid-term Test", "review Units 1–3", "All grammar points", "Written and oral test", "Assess progress and speaking fluency"],
            [14, "Unit 4: At home – Lesson 2", "household chores", "Who + verb / question words", "Family chore chart", "Talk about family chores and responsibilities"],
            [15, "Unit 4: At home – Lesson 3", "daily routines", "Present simple review", "My daily routine worksheet", "Use present simple to describe daily life"],
            [16, "Unit 5: Let’s go on holiday! – Lesson 1", "transport, travel places", "Going to + verb", "Holiday packing activity", "Talk about future travel plans"],
            [17, "Unit 5: Let’s go on holiday! – Lesson 2", "destinations", "Going to (questions and short answers)", "Where are you going? game", "Ask and answer about travel plans"],
            [18, "Unit 5: Let’s go on holiday! – Lesson 3", "holiday activities", "Present continuous for future", "My trip plan project", "Talk about upcoming travel activities"],
            [19, "Unit 6: My favourite book – Lesson 1", "books and characters", "Present continuous", "Book cover project", "Describe what people are doing in a story"],
            [20, "Unit 6: My favourite book – Lesson 2", "stories and genres", "Who / What / Where questions", "Story sequencing activity", "Ask and answer about books and stories"],
            [21, "Unit 6: My favourite book – Lesson 3", "storytime vocabulary", "Review grammar structures", "Create your own short story", "Use learned grammar to write simple stories"],
            [22, "Fluency Time + Review 2", "Units 4–6 vocabulary", "All grammar structures", "Speaking and listening practice", "Develop fluency through conversation"],
            [23, "Final Review & Practice", "All Units 1–6", "All grammar points", "Games + oral practice", "Prepare for final assessment"],
            [24, "Final Test", "All Units 1–6", "Comprehensive review", "Final written and oral exam", "Demonstrate mastery of all course content"]
        ];

        foreach ($lessons_ik11 as $lesson) {
            $ik11->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 12
    |--------------------------------------------------------------------------
    */
        $ik12 = Subject::where('name', 'ICY Kids 12')->first();

        $lessons_ik12 = [
            [1, "Review Starter & Units 1–6", "family, home, school vocabulary", "Present simple / continuous", "Warm-up review + Q&A", "Recall basic grammar and vocabulary"],
            [2, "Unit 7: This is my family – Lesson 1", "family members", "Have got / Has got", "Family tree project", "Describe family members accurately"],
            [3, "Unit 7: This is my family – Lesson 2", "jobs & relationships", "Who’s this? / He’s / She’s", "Guess Who? game", "Ask and answer about people"],
            [4, "Unit 7: This is my family – Lesson 3", "possessions & family activities", "Possessive ’s", "My family photo project", "Talk about family relationships and belongings"],
            [5, "Unit 8: What’s for lunch? – Lesson 1", "food and drinks", "Would like / I want", "Create your own menu", "Order and express food preferences politely"],
            [6, "Unit 8: What’s for lunch? – Lesson 2", "meals & quantities", "Some / any / a / an", "Restaurant role play", "Use quantifiers in food contexts"],
            [7, "Unit 8: What’s for lunch? – Lesson 3", "cooking & habits", "Present simple (I eat / I don’t eat)", "My favorite meal writing", "Talk about eating habits"],
            [8, "Unit 9: Do you like animals? – Lesson 1", "animals & pets", "Like / Don’t like", "Pet show presentation", "Express likes and dislikes about animals"],
            [9, "Unit 9: Do you like animals? – Lesson 2", "animal characteristics", "Can / Can’t", "Animal ability chart", "Describe animal abilities using can/can’t"],
            [10, "Unit 9: Do you like animals? – Lesson 3", "animal habitats", "Where do they live?", "Habitat matching game", "Identify animals and their habitats"],
            [11, "Unit 10: The weather – Lesson 1", "weather expressions", "It’s + adjective (sunny, rainy)", "Weather chart activity", "Describe and compare weather conditions"],
            [12, "Unit 10: The weather – Lesson 2", "seasons & activities", "What do you do in…?", "Season poster project", "Talk about activities in different seasons"],
            [13, "Mid-term Test", "review Units 7–9", "All grammar points", "Written and oral test", "Assess knowledge and fluency in first half"],
            [14, "Unit 10: The weather – Lesson 3", "clothes & weather", "What are you wearing?", "Dress for the weather game", "Match clothing with weather conditions"],
            [15, "Unit 11: What’s the matter? – Lesson 1", "health problems", "Have got + aches", "Doctor role play", "Discuss and identify health problems"],
            [16, "Unit 11: What’s the matter? – Lesson 2", "feelings & advice", "Should / Shouldn’t", "Health tips poster", "Give and receive advice about health"],
            [17, "Unit 11: What’s the matter? – Lesson 3", "healthy habits", "Present simple", "Healthy day routine writing", "Talk about daily healthy routines"],
            [18, "Unit 12: In the countryside – Lesson 1", "nature and landscapes", "There is / There are", "Countryside drawing project", "Describe scenes using there is/are"],
            [19, "Unit 12: In the countryside – Lesson 2", "outdoor activities", "Prepositions of place", "Farm map labeling", "Use prepositions to describe location in countryside"],
            [20, "Unit 12: In the countryside – Lesson 3", "animals & people in the country", "Present continuous", "Countryside story writing", "Describe actions happening outdoors"],
            [21, "Fluency Time + Review 2", "vocabulary from Units 10–12", "All grammar points", "Speaking + listening games", "Reinforce vocabulary and grammar fluency"],
            [22, "Project: My Healthy Life", "food, health, daily routine", "Should / shouldn’t / have got", "Poster + presentation", "Integrate grammar into creative context"],
            [23, "Final Review & Practice", "All Units 7–12", "All grammar structures", "Games + oral review", "Prepare for final assessment"],
            [24, "Final Test", "All Units 7–12", "Comprehensive review", "Written + oral exam", "Demonstrate overall course achievement"]
        ];

        foreach ($lessons_ik12 as $lesson) {
            $ik12->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 13
    |--------------------------------------------------------------------------
    */
        $ik13 = Subject::where('name', 'ICY Kids 13')->first();

        $lessons_ik13 = [
            [1, "Starter: Do something different!", "daily routines, creative actions", "Present simple / continuous review", "Icebreaker: My creative day", "Review core grammar and set course expectations"],
            [2, "Unit 1: You can build it! – Lesson 1", "tools, furniture", "Present perfect (ever / never)", "House project discussion", "Talk about experiences using present perfect"],
            [3, "Unit 1: You can build it! – Lesson 2", "building materials", "Since / for + present perfect", "Build your dream room poster", "Use time expressions with present perfect"],
            [4, "Unit 2: It’s show time! – Lesson 1", "theatre, performance", "Past simple and present perfect", "Mini play reading", "Identify differences between past and present tenses"],
            [5, "Unit 2: It’s show time! – Lesson 2", "actors, roles", "Past continuous", "Drama role play", "Act out and describe events using past continuous"],
            [6, "Unit 3: The best party ever! – Lesson 1", "parties, decorations", "Comparatives and superlatives", "Party plan worksheet", "Use comparatives to describe events"],
            [7, "Unit 3: The best party ever! – Lesson 2", "festivals", "Too / enough", "Poster project: My dream festival", "Use too/enough in descriptive writing"],
            [8, "Fluency Time 1 + Review 1", "Units 1–3 vocabulary", "Review tenses and comparisons", "Speaking games + quiz", "Reinforce grammar and vocabulary fluently"],
            [9, "Unit 4: Our planet – Lesson 1", "nature, environment", "Past simple & past continuous", "Earth Day poster", "Describe environmental issues using past tenses"],
            [10, "Unit 4: Our planet – Lesson 2", "environment", "Used to + verb", "Interview about past habits", "Contrast past and present environmental actions"],
            [11, "Unit 5: Reuse and recycle – Lesson 1", "recycling materials", "Will / won’t", "Recycling awareness leaflet", "Make predictions and promises about recycling"],
            [12, "Unit 5: Reuse and recycle – Lesson 2", "environment", "Present continuous for future meaning", "Create recycling campaign", "Describe future actions for sustainability"],
            [13, "Mid-term Test", "Review Units 1–3", "All grammar points", "Written + oral test", "Assess understanding and fluency progress"],
            [14, "Unit 6: Crazy about wildlife! – Lesson 1", "animals & habitats", "Be going to + verb", "Wildlife park map", "Plan future activities with be going to"],
            [15, "Unit 6: Crazy about wildlife! – Lesson 2", "animal actions", "Present continuous (future use)", "Zoo brochure project", "Describe actions of animals and predict behaviors"],
            [16, "Unit 7: Call an ambulance! – Lesson 1", "health, first aid", "Reported speech (said/told)", "Emergency dialogue practice", "Report statements accurately in conversations"],
            [17, "Unit 7: Call an ambulance! – Lesson 2", "emergencies", "Reported speech time markers", "Newspaper article writing", "Write short reports using reported speech"],
            [18, "Fluency Time 2 + Review 2", "Vocabulary Units 4–7", "Future tenses & reported speech", "Team speaking games", "Consolidate and apply grammar in communicative contexts"],
            [19, "Project: My Eco Poster", "environment, wildlife", "Future and conditional forms", "Design & present eco poster", "Combine creativity with environmental awareness"],
            [20, "Review Session: Speaking & Writing Workshop", "All Units 1–7", "Mixed grammar review", "Peer interview + writing challenge", "Strengthen integrated communication skills"],
            [21, "Listening & Reading Practice", "course topics", "All grammar points", "Listening quiz + comprehension test", "Enhance receptive skills with extended tasks"],
            [22, "Mock Test & Review", "All Units 1–7", "All grammar", "Simulated mid + final test", "Evaluate readiness for final exam"],
            [23, "Creative Project Presentation", "performing arts, environment", "Mixed grammar", "Student group performances", "Demonstrate creativity and oral fluency"],
            [24, "Final Test", "All Units 1–7", "Comprehensive grammar and skills", "Final written + oral exam", "Assess overall mastery and communication skills"]
        ];

        foreach ($lessons_ik13 as $lesson) {
            $ik13->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 14
    |--------------------------------------------------------------------------
    */

        $ik14 = Subject::where('name', 'ICY Kids 14')->first();

        $lessons_ik14 = [
            [1, "Review Starter & Unit 7", "health & wildlife", "Present continuous / reported speech review", "Warm-up + recap quiz", "Recall key grammar from previous units"],
            [2, "Unit 8: Let’s eat healthily! – Lesson 1", "healthy food, nutrition", "First conditional (if + will)", "Food pyramid project", "Make conditional sentences about healthy eating"],
            [3, "Unit 8: Let’s eat healthily! – Lesson 2", "eating habits", "Quantifiers (a few, a lot, some)", "Healthy meal plan activity", "Use quantifiers to describe diets"],
            [4, "Unit 8: Let’s eat healthily! – Lesson 3", "meals", "First conditional questions", "Workbook + role play", "Ask and answer questions about food choices"],
            [5, "Unit 9: The big match – Lesson 1", "sports, competition", "Modal verbs (may, might, could)", "Sports interview project", "Use modals to express possibility"],
            [6, "Unit 9: The big match – Lesson 2", "games & fitness", "Should / shouldn’t", "Team discussion + survey", "Give advice about fitness and sports"],
            [7, "Fluency Time 3 + Review 3", "vocabulary from Units 8–9", "All grammar points", "Speaking & listening games", "Reinforce accuracy and fluency"],
            [8, "Unit 10: Ancient buildings – Lesson 1", "history, architecture", "Indefinite pronouns (something, nothing)", "Museum activity", "Use indefinite pronouns correctly"],
            [9, "Unit 10: Ancient buildings – Lesson 2", "places & history", "There is / There are + review", "Design your ancient city", "Write and describe an imaginary city"],
            [10, "Unit 11: A message for the future – Lesson 1", "messages, communication", "Passive voice (present)", "Create a message capsule", "Form passive sentences in context"],
            [11, "Unit 11: A message for the future – Lesson 2", "technology, inventions", "Passive voice (past)", "Future message writing", "Use passive past forms in writing"],
            [12, "Fluency Time 4 + Review 4", "Units 10–11 vocabulary", "All passive structures", "Speaking practice & quiz", "Practice speaking with focus on passives"],
            [13, "Mid-term Test", "review Units 8–11", "All grammar points", "Written + oral test", "Assess knowledge and skills from first half of the term"],
            [14, "Unit 12: Be a part of history! – Lesson 1", "historical figures", "Passive (questions)", "Interview a historical figure activity", "Ask and answer passive questions"],
            [15, "Unit 12: Be a part of history! – Lesson 2", "achievements", "Adjectives + ing/ed", "Biography writing", "Differentiate between adjectives ending in -ed and -ing"],
            [16, "Unit 13: Let’s celebrate! – Lesson 1", "festivals, holidays", "Future continuous", "Festival poster project", "Talk about future plans for events"],
            [17, "Unit 13: Let’s celebrate! – Lesson 2", "celebrations", "Future perfect", "Timeline activity", "Use future perfect to describe future events"],
            [18, "Unit 14: Around the world – Lesson 1", "countries, travel", "Relative clauses (who, which, that)", "World quiz + map project", "Use defining relative clauses in context"],
            [19, "Unit 14: Around the world – Lesson 2", "cultures, landmarks", "Comparative review", "Travel brochure project", "Describe and compare world landmarks"],
            [20, "Unit 15: My invention! – Lesson 1", "inventions & creativity", "Present perfect passive", "Inventor’s journal", "Use present perfect passive to describe inventions"],
            [21, "Unit 15: My invention! – Lesson 2", "science & progress", "Modal verbs for obligation", "Innovation fair project", "Express necessity using modals"],
            [22, "Fluency Time 5 + Review 5", "vocabulary Units 12–15", "All grammar points", "Speaking & writing workshop", "Integrate all skills and grammar before final test"],
            [23, "Project: Knowledge Map", "history, science, inventions", "Mixed grammar", "Create and present knowledge map", "Synthesize key topics creatively"],
            [24, "Final Test", "All Units 8–15", "Comprehensive review", "Final written + oral exam", "Demonstrate mastery of grammar and course topics"]
        ];

        foreach ($lessons_ik14 as $lesson) {
            $ik14->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        /*
    |--------------------------------------------------------------------------
    | ICY Kids 15
    |--------------------------------------------------------------------------
    */

        $ik15 = Subject::where('name', 'ICY Kids 15')->first();
        $lessons_ik15 = [
            [1, "Starter: Hello!", "greetings, introductions, numbers 1–20", "Be verb, simple present", "Pair work: introduce yourself", "Use greetings and basic introductions confidently"],
            [2, "Unit 1: Our home – Lesson 1", "rooms in the house", "There is / There are", "My home drawing project", "Identify and describe rooms in the house"],
            [3, "Unit 1: Our home – Lesson 2", "furniture", "Prepositions of place (in/on/under)", "Where is it? game", "Use prepositions to describe location of objects"],
            [4, "Unit 1: Our home – Lesson 3", "household items", "Have got / Has got", "My room description activity", "Talk about possessions in your home"],
            [5, "Unit 2: Going to town – Lesson 1", "town places (shop, park, bank)", "Can / Can’t", "Town vocabulary matching", "Recognize common town places and services"],
            [6, "Unit 2: Going to town – Lesson 2", "shops & directions", "Wh- questions (Where / What / Who)", "Town map labeling", "Ask and answer questions about town locations"],
            [7, "Unit 2: Going to town – Lesson 3", "city activities", "Imperatives (Go straight / Turn left)", "Direction game", "Give and follow directions accurately"],
            [8, "Unit 3: Eating out – Lesson 1", "food and drinks", "Would like / I want", "Menu creation project", "Order food politely using would like"],
            [9, "Unit 3: Eating out – Lesson 2", "meals and restaurants", "Some / any / a / an", "Restaurant role play", "Use quantifiers in food contexts"],
            [10, "Unit 3: Eating out – Lesson 3", "food habits", "Present simple (I eat / I don’t eat)", "Food survey + graph", "Talk about daily eating habits"],
            [11, "Unit 4: At school – Lesson 1", "school objects", "Have got / Has got", "Classroom labeling activity", "Identify and describe school materials"],
            [12, "Unit 4: At school – Lesson 2", "subjects & routines", "Present simple", "Weekly timetable project", "Discuss daily school routines confidently"],
            [13, "Mid-term Test", "review Units 1–3", "All grammar points", "Written and oral test", "Evaluate comprehension and speaking fluency"],
            [14, "Unit 4: At school – Lesson 3", "classroom language", "Imperatives (Sit down, open your book)", "Mini class role play", "Use imperative forms in classroom contexts"],
            [15, "Unit 5: A day out – Lesson 1", "outdoor activities", "Present continuous (affirmative)", "Picture description", "Describe actions happening right now"],
            [16, "Unit 5: A day out – Lesson 2", "weather & activities", "What’s the weather like?", "Weather diary activity", "Discuss activities and weather patterns"],
            [17, "Unit 5: A day out – Lesson 3", "places & transport", "Going to + verb", "Trip plan project", "Talk about future activities using going to"],
            [18, "Unit 6: Dream jobs – Lesson 1", "jobs and professions", "He’s / She’s a …", "Guess the job activity", "Identify and describe different jobs"],
            [19, "Unit 6: Dream jobs – Lesson 2", "occupations and abilities", "Can / Can’t", "Job ability chart", "Describe what people can do in their jobs"],
            [20, "Unit 6: Dream jobs – Lesson 3", "future aspirations", "Be going to + verb", "My dream job poster", "Talk about future job plans using be going to"],
            [21, "Fluency Time + Review 2", "vocabulary Units 4–6", "All grammar points", "Speaking games + dialogues", "Enhance fluency and listening accuracy"],
            [22, "Project: My Dream Town", "places, jobs, homes", "There is / There are / Can", "Poster design project", "Integrate grammar in creative speaking task"],
            [23, "Final Review Session", "all Units 1–6", "All grammar and vocabulary", "Team quiz + oral practice", "Prepare for final assessment"],
            [24, "Final Test", "all Units 1–6", "Comprehensive review", "Written and speaking test", "Demonstrate complete course mastery"]
          ];

        foreach ($lessons_ik15 as $lesson) {
            $ik15->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

            /*
        |--------------------------------------------------------------------------
        | ICY Kids 16
        |--------------------------------------------------------------------------
        */

        $ik16 = Subject::where('name', 'ICY Kids 16')->first();

        $lessons_ik16 = [
            [1, "Review Starter & Units 1–6", "home, food, jobs, school", "Present simple / continuous / can", "Warm-up games + review quiz", "Recall and consolidate basic grammar and vocabulary"],
            [2, "Unit 7: At the castle – Lesson 1", "castles, rooms, people", "There was / There were", "Castle map activity", "Describe past places using there was/were"],
            [3, "Unit 7: At the castle – Lesson 2", "things in the castle", "Past simple (regular verbs)", "Castle diary writing", "Use regular verbs to describe past events"],
            [4, "Unit 7: At the castle – Lesson 3", "castle life", "Past simple questions", "Role play: A day in the castle", "Ask and answer questions in the past tense"],
            [5, "Unit 8: Sports day! – Lesson 1", "sports, equipment", "Can / Can’t", "Sports vocabulary matching", "Talk about sport abilities using can/can’t"],
            [6, "Unit 8: Sports day! – Lesson 2", "competition and performance", "Comparatives (faster, better)", "Class sport competition", "Compare people using comparatives"],
            [7, "Unit 8: Sports day! – Lesson 3", "school events", "Superlatives (the best, the fastest)", "School event report", "Use superlatives to describe achievements"],
            [8, "Unit 9: Our camping adventure – Lesson 1", "camping items", "Was / Were", "Camping checklist project", "Use was/were to describe camping objects"],
            [9, "Unit 9: Our camping adventure – Lesson 2", "activities outdoors", "Past continuous", "Story building: Camping trip", "Describe actions in progress in the past"],
            [10, "Unit 9: Our camping adventure – Lesson 3", "camping fun", "Past simple & continuous review", "Draw & write camping story", "Combine both tenses in storytelling"],
            [11, "Unit 10: A good year! – Lesson 1", "months, holidays", "When / What did you do?", "Calendar activity", "Ask and answer about yearly events"],
            [12, "Unit 10: A good year! – Lesson 2", "festivals and celebrations", "Past simple (irregular verbs)", "Festival diary", "Describe past events using irregular verbs"],
            [13, "Mid-term Test", "review Units 7–9", "All grammar points", "Written and oral test", "Assess progress of first half of course"],
            [14, "Unit 10: A good year! – Lesson 3", "family holidays", "Past continuous review", "Photo album project", "Describe what people were doing on holidays"],
            [15, "Unit 11: Our summer holidays – Lesson 1", "holiday activities", "Past continuous", "Vacation photo description", "Talk about ongoing actions in the past"],
            [16, "Unit 11: Our summer holidays – Lesson 2", "travel experiences", "Past simple vs continuous", "Story sequencing", "Distinguish between simple and continuous actions"],
            [17, "Unit 11: Our summer holidays – Lesson 3", "beach & mountain vocabulary", "Review past forms", "Summer holiday journal", "Write a short diary about vacation"],
            [18, "Unit 12: Past and future – Lesson 1", "future plans", "Be going to + verb", "My future plan chart", "Talk about personal future plans"],
            [19, "Unit 12: Past and future – Lesson 2", "predictions", "Will + verb", "Fortune-telling activity", "Make future predictions using will"],
            [20, "Unit 12: Past and future – Lesson 3", "dreams & goals", "Future tenses review", "My life in 10 years poster", "Use future forms to describe ambitions"],
            [21, "Fluency Time + Review 2", "Units 10–12 vocabulary", "Past & future tenses", "Games + conversation practice", "Reinforce fluency and grammar accuracy"],
            [22, "Project: My Yearbook", "seasons, memories, events", "Mixed tenses", "Yearbook creation project", "Integrate past and future tenses creatively"],
            [23, "Final Review Session", "all Units 7–12", "All grammar and vocabulary", "Group quiz + dialogue", "Prepare for final test with interactive review"],
            [24, "Final Test", "all Units 7–12", "Comprehensive review", "Written and oral test", "Demonstrate full mastery of course content"]
          ];

        foreach ($lessons_ik16 as $lesson) {
            $ik16->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY TEEN 1 ==========
        $teen1 = Subject::where('name', 'ICY Teen 1')->first();
        $lessons_teen1 = [
            [1, "Unit 1: My New School – Lesson 1: Reading about schools", "School things, activities, Verbs: play, do, have, study, Sounds: /ə/ and /ʌ/", "Present simple, Adverbs of frequency", "Workbook exercises + short writing task on Reading about schools", "Students can reading about schools using target vocab & grammar"],
            [2, "Unit 1: My New School – Lesson 2: Talking about schools", "School things, activities, Verbs: play, do, have, study, Sounds: /ə/ and /ʌ/", "Present simple, Adverbs of frequency", "Workbook exercises + short writing task on Talking about schools", "Students can talking about schools using target vocab & grammar"],
            [3, "Unit 1: My New School – Lesson 3: Writing a paragraph about one's school", "School things, activities, Verbs: play, do, have, study, Sounds: /ə/ and /ʌ/", "Present simple, Adverbs of frequency", "Workbook exercises + short writing task on Writing a paragraph about one's school", "Students can writing about one's school using target vocab & grammar"],
            [4, "Unit 2: My House – Lesson 1: Reading about rooms and furniture", "Types of houses, Rooms and furniture, Final sounds: /s/ and /z/", "Possessive case, Prepositions of place", "Workbook exercises + short writing task on Reading about rooms and furniture", "Students can reading about rooms and furniture using target vocab & grammar"],
            [5, "Unit 2: My House – Lesson 2: Describing houses and furniture", "Types of houses, Rooms and furniture, Final sounds: /s/ and /z/", "Possessive case, Prepositions of place", "Workbook exercises + short writing task on Describing houses and furniture", "Students can describing houses and furniture using target vocab & grammar"],
            [6, "Unit 2: My House – Lesson 3: Writing an email about a house", "Types of houses, Rooms and furniture, Final sounds: /s/ and /z/", "Possessive case, Prepositions of place", "Workbook exercises + short writing task on Writing an email about a house", "Students can writing an email about a house using target vocab & grammar"],
            [7, "Unit 3: My Friends – Lesson 1: Reading about friends", "Body parts, appearance, Personality adjectives, Sounds: /b/ and /p/", "Present continuous", "Workbook exercises + short writing task on Reading about friends", "Students can reading about friends using target vocab & grammar"],
            [8, "Unit 3: My Friends – Lesson 2: Talking about friends and camps", "Body parts, appearance, Personality adjectives, Sounds: /b/ and /p/", "Present continuous", "Workbook exercises + short writing task on Talking about friends and camps", "Students can talking about friends and camps using target vocab & grammar"],
            [9, "Unit 3: My Friends – Lesson 3: Writing a diary about best friends", "Body parts, appearance, Personality adjectives, Sounds: /b/ and /p/", "Present continuous", "Workbook exercises + short writing task on Writing a diary about best friends", "Students can writing about best friends using target vocab & grammar"],
            [10, "Review 1 (Units 1–3)", "Review all vocabulary from Units 1–3", "Review grammar from Units 1–3", "Group quiz + mini project presentation", "Students consolidate knowledge of Units 1–3"],
            [11, "Unit 4: My Neighbourhood – Lesson 1: Reading about a neighbourhood", "Places in a neighbourhood, Pronunciation: /iə/ and /i:/", "Comparative adjectives", "Workbook exercises + short writing task on Reading about a neighbourhood", "Students can reading about a neighbourhood using target vocab & grammar"],
            [12, "Unit 4: My Neighbourhood – Lesson 2: Talking about neighbourhood", "Places in a neighbourhood, Pronunciation: /iə/ and /i:/", "Comparative adjectives", "Workbook exercises + short writing task on Talking about neighbourhood", "Students can talking about neighbourhood using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–3)", "Students demonstrate mastery of Units 1–3"],
            [14, "Unit 4: My Neighbourhood – Lesson 3: Writing a paragraph about neighbourhood", "Places in a neighbourhood, Pronunciation: /iə/ and /i:/", "Comparative adjectives", "Workbook exercises + short writing task on Writing a paragraph about neighbourhood", "Students can writing about neighbourhood using target vocab & grammar"],
            [15, "Unit 5: Natural Wonders of Viet Nam – Lesson 1: Reading about natural wonders", "Things in nature, Travel items, Sounds: /t/ and /d/", "Countable/uncountable nouns, Modal verb: must/mustn't", "Workbook exercises + short writing task on Reading about natural wonders", "Students can reading about natural wonders using target vocab & grammar"],
            [16, "Unit 5: Natural Wonders of Viet Nam – Lesson 2: Talking about famous places", "Things in nature, Travel items, Sounds: /t/ and /d/", "Countable/uncountable nouns, Modal verb: must/mustn't", "Workbook exercises + short writing task on Talking about famous places", "Students can talking about famous places using target vocab & grammar"],
            [17, "Unit 5: Natural Wonders of Viet Nam – Lesson 3: Writing a paragraph about a natural wonder", "Things in nature, Travel items, Sounds: /t/ and /d/", "Countable/uncountable nouns, Modal verb: must/mustn't", "Workbook exercises + short writing task on Writing a paragraph about a natural wonder", "Students can writing about a natural wonder using target vocab & grammar"],
            [18, "Unit 6: Our Tet Holiday – Lesson 1: Reading about Tet practices", "Tet activities, Pronunciation: /s/ and /ʃ/", "Should/shouldn't for advice, Some/any", "Workbook exercises + short writing task on Reading about Tet practices", "Students can reading about tet practices using target vocab & grammar"],
            [19, "Unit 6: Our Tet Holiday – Lesson 2: Talking about Tet activities", "Tet activities, Pronunciation: /s/ and /ʃ/", "Should/shouldn't for advice, Some/any", "Workbook exercises + short writing task on Talking about Tet activities", "Students can talking about tet activities using target vocab & grammar"],
            [20, "Unit 6: Our Tet Holiday – Lesson 3: Writing an email about Tet", "Tet activities, Pronunciation: /s/ and /ʃ/", "Should/shouldn't for advice, Some/any", "Workbook exercises + short writing task on Writing an email about Tet", "Students can writing an email about tet using target vocab & grammar"],
            [21, "Project-based Learning: English Culture & Daily Life", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a short project", "Students apply knowledge creatively in real-life tasks"],
            [22, "Project-based Learning: English Culture & Daily Life", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a short project", "Students apply knowledge creatively in real-life tasks"],
            [23, "Review 2 (Units 4–6)", "Review all vocabulary from Units 4–6", "Review grammar from Units 4–6", "Group quiz + project poster", "Students consolidate knowledge of Units 4–6"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
        ];
        foreach ($lessons_teen1 as $lesson) {
            $teen1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY TEEN 2 ==========
        $teen2 = Subject::where('name', 'ICY Teen 2')->first();
        $lessons_teen2 = [
            [1, "Unit 7: Television – Lesson 1: Reading about TV guide", "TV programmes, Sounds: /θ/ and /ð/", "Wh-questions, Conjunctions: and, but, so", "Workbook exercises + speaking/writing on Reading about TV guide", "Students can reading about tv guide using target vocab & grammar"],
            [2, "Unit 7: Television – Lesson 2: Talking about TV programmes", "TV programmes, Sounds: /θ/ and /ð/", "Wh-questions, Conjunctions: and, but, so", "Workbook exercises + speaking/writing on Talking about TV programmes", "Students can talking about tv programmes using target vocab & grammar"],
            [3, "Unit 7: Television – Lesson 3: Writing about TV-viewing habits", "TV programmes, Sounds: /θ/ and /ð/", "Wh-questions, Conjunctions: and, but, so", "Workbook exercises + speaking/writing on Writing about TV-viewing habits", "Students can writing about tv-viewing habits using target vocab & grammar"],
            [4, "Unit 8: Sports and Games – Lesson 1: Reading about sports stars", "Sports and games, Sounds: /e/ and /æ/", "Past simple, Imperatives", "Workbook exercises + speaking/writing on Reading about sports stars", "Students can reading about sports stars using target vocab & grammar"],
            [5, "Unit 8: Sports and Games – Lesson 2: Talking about sportspeople", "Sports and games, Sounds: /e/ and /æ/", "Past simple, Imperatives", "Workbook exercises + speaking/writing on Talking about sportspeople", "Students can talking about sportspeople using target vocab & grammar"],
            [6, "Unit 8: Sports and Games – Lesson 3: Writing about a sport/game", "Sports and games, Sounds: /e/ and /æ/", "Past simple, Imperatives", "Workbook exercises + speaking/writing on Writing about a sport/game", "Students can writing about a sport/game using target vocab & grammar"],
            [7, "Unit 9: Cities of the World – Lesson 1: Reading about holiday postcard", "Cities and landmarks, Sounds: /əʊ/ and /aʊ/", "Possessive adjectives, Possessive pronouns", "Workbook exercises + speaking/writing on Reading about holiday postcard", "Students can reading about holiday postcard using target vocab & grammar"],
            [8, "Unit 9: Cities of the World – Lesson 2: Talking about a city", "Cities and landmarks, Sounds: /əʊ/ and /aʊ/", "Possessive adjectives, Possessive pronouns", "Workbook exercises + speaking/writing on Talking about a city", "Students can talking about a city using target vocab & grammar"],
            [9, "Unit 9: Cities of the World – Lesson 3: Writing a holiday postcard", "Cities and landmarks, Sounds: /əʊ/ and /aʊ/", "Possessive adjectives, Possessive pronouns", "Workbook exercises + speaking/writing on Writing a holiday postcard", "Students can writing about a holiday postcard using target vocab & grammar"],
            [10, "Review 3 (Units 7–9)", "Review vocabulary Units 7–9", "Review grammar Units 7–9", "Group quiz + discussion project", "Students consolidate Units 7–9"],
            [11, "Unit 10: Our Houses in the Future – Lesson 1: Reading about future houses", "Types of houses and appliances, Stress in two-syllable words", "Future simple, Might for possibility", "Workbook exercises + speaking/writing on Reading about future houses", "Students can reading about future houses using target vocab & grammar"],
            [12, "Unit 10: Our Houses in the Future – Lesson 2: Talking about future houses", "Types of houses and appliances, Stress in two-syllable words", "Future simple, Might for possibility", "Workbook exercises + speaking/writing on Talking about future houses", "Students can talking about future houses using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 7–9)", "Students demonstrate mastery of Units 7–9"],
            [14, "Unit 10: Our Houses in the Future – Lesson 3: Writing about a dream house", "Types of houses and appliances, Stress in two-syllable words", "Future simple, Might for possibility", "Workbook exercises + speaking/writing on Writing about a dream house", "Students can writing about a dream house using target vocab & grammar"],
            [15, "Unit 11: Our Greener World – Lesson 1: Reading about going green", "Things reused/recycled, Rhythm in sentences", "Articles, First conditional", "Workbook exercises + speaking/writing on Reading about going green", "Students can reading about going green using target vocab & grammar"],
            [16, "Unit 11: Our Greener World – Lesson 2: Talking about green tips", "Things reused/recycled, Rhythm in sentences", "Articles, First conditional", "Workbook exercises + speaking/writing on Talking about green tips", "Students can talking about green tips using target vocab & grammar"],
            [17, "Unit 11: Our Greener World – Lesson 3: Writing about a green club", "Things reused/recycled, Rhythm in sentences", "Articles, First conditional", "Workbook exercises + speaking/writing on Writing about a green club", "Students can writing about a green club using target vocab & grammar"],
            [18, "Unit 12: Robots – Lesson 1: Reading about robots", "Daily activities, Tones in statements", "Superlative adjectives (short)", "Workbook exercises + speaking/writing on Reading about robots", "Students can reading about robots using target vocab & grammar"],
            [19, "Unit 12: Robots – Lesson 2: Talking about robots", "Daily activities, Tones in statements", "Superlative adjectives (short)", "Workbook exercises + speaking/writing on Talking about robots", "Students can talking about robots using target vocab & grammar"],
            [20, "Unit 12: Robots – Lesson 3: Writing about a robot", "Daily activities, Tones in statements", "Superlative adjectives (short)", "Workbook exercises + speaking/writing on Writing about a robot", "Students can writing about a robot using target vocab & grammar"],
            [21, "Project-based Learning: My Future World", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: My Future World", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 4 (Units 10–12)", "Review vocabulary Units 10–12", "Review grammar Units 10–12", "Mini project: future world poster", "Students consolidate Units 10–12"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];
        foreach ($lessons_teen2 as $lesson) {
            $teen2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY TEEN 3 ==========
        $teen3 = Subject::where('name', 'ICY Teen 3')->first();

        $lessons_teen3 = [
            [1, "Unit 1: Hobbies – Lesson 1: Reading about hobbies", "Hobbies, Verbs of liking/disliking, Sounds: /ə/ and /з:/", "Present simple", "Workbook tasks + speaking/writing on Reading about hobbies", "Students can reading about hobbies using target vocab & grammar"],
            [2, "Unit 1: Hobbies – Lesson 2: Talking about hobbies", "Hobbies, Verbs of liking/disliking, Sounds: /ə/ and /з:/", "Present simple", "Workbook tasks + speaking/writing on Talking about hobbies", "Students can talking about hobbies using target vocab & grammar"],
            [3, "Unit 1: Hobbies – Lesson 3: Writing about a hobby", "Hobbies, Verbs of liking/disliking, Sounds: /ə/ and /з:/", "Present simple", "Workbook tasks + speaking/writing on Writing about a hobby", "Students can writing about a hobby using target vocab & grammar"],
            [4, "Unit 2: Healthy Living – Lesson 1: Reading about health problems", "Healthy activities, Health problems, Sounds: /f/ and /v/", "Simple sentences", "Workbook tasks + speaking/writing on Reading about health problems", "Students can reading about health problems using target vocab & grammar"],
            [5, "Unit 2: Healthy Living – Lesson 2: Talking about health tips", "Healthy activities, Health problems, Sounds: /f/ and /v/", "Simple sentences", "Workbook tasks + speaking/writing on Talking about health tips", "Students can talking about health tips using target vocab & grammar"],
            [6, "Unit 2: Healthy Living – Lesson 3: Writing advice to avoid illness", "Healthy activities, Health problems, Sounds: /f/ and /v/", "Simple sentences", "Workbook tasks + speaking/writing on Writing advice to avoid illness", "Students can writing advice to avoid illness using target vocab & grammar"],
            [7, "Unit 3: Community Service – Lesson 1: Reading about community activities", "Community activities, Pronunciation: /t/, /d/, /id/", "Past simple", "Workbook tasks + speaking/writing on Reading about community activities", "Students can reading about community activities using target vocab & grammar"],
            [8, "Unit 3: Community Service – Lesson 2: Talking about community service", "Community activities, Pronunciation: /t/, /d/, /id/", "Past simple", "Workbook tasks + speaking/writing on Talking about community service", "Students can talking about community service using target vocab & grammar"],
            [9, "Unit 3: Community Service – Lesson 3: Writing an email about community activities", "Community activities, Pronunciation: /t/, /d/, /id/", "Past simple", "Workbook tasks + speaking/writing on Writing an email about community activities", "Students can writing an email about community activities using target vocab & grammar"],
            [10, "Review 1 (Units 1–3)", "Review vocabulary Units 1–3", "Review grammar Units 1–3", "Quiz + poster project", "Students consolidate Units 1–3"],
            [11, "Unit 4: Music and Arts – Lesson 1: Reading about traditional art", "Music and arts, Sounds: /ʃ/ and /ʒ/", "Comparisons: like, different from, (not) as … as", "Workbook tasks + speaking/writing on Reading about traditional art", "Students can reading about traditional art using target vocab & grammar"],
            [12, "Unit 4: Music and Arts – Lesson 2: Talking about a musical performance", "Music and arts, Sounds: /ʃ/ and /ʒ/", "Comparisons: like, different from, (not) as … as", "Workbook tasks + speaking/writing on Talking about a musical performance", "Students can talking about a musical performance using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–3)", "Students demonstrate mastery of Units 1–3"],
            [14, "Unit 4: Music and Arts – Lesson 3: Writing an informal invitation", "Music and arts, Sounds: /ʃ/ and /ʒ/", "Comparisons: like, different from, (not) as … as", "Workbook tasks + speaking/writing on Writing an informal invitation", "Students can writing an informal invitation using target vocab & grammar"],
            [15, "Unit 5: Food and Drink – Lesson 1: Reading about traditional food", "Food and drink, Sounds: /b/ and /p/", "Some, a lot of, lots of", "Workbook tasks + speaking/writing on Reading about traditional food", "Students can reading about traditional food using target vocab & grammar"],
            [16, "Unit 5: Food and Drink – Lesson 2: Talking about food/drink", "Food and drink, Sounds: /b/ and /p/", "Some, a lot of, lots of", "Workbook tasks + speaking/writing on Talking about food/drink", "Students can talking about food/drink using target vocab & grammar"],
            [17, "Unit 5: Food and Drink – Lesson 3: Writing about eating habits", "Food and drink, Sounds: /b/ and /p/", "Some, a lot of, lots of", "Workbook tasks + speaking/writing on Writing about eating habits", "Students can writing about eating habits using target vocab & grammar"],
            [18, "Unit 6: A Visit to a School – Lesson 1: Reading about a famous school", "Schools, facilities, Sounds: /tʃ/ and /dʒ/", "Prepositions of time and place", "Workbook tasks + speaking/writing on Reading about a famous school", "Students can reading about a famous school using target vocab & grammar"],
            [19, "Unit 6: A Visit to a School – Lesson 2: Talking about schools", "Schools, facilities, Sounds: /tʃ/ and /dʒ/", "Prepositions of time and place", "Workbook tasks + speaking/writing on Talking about schools", "Students can talking about schools using target vocab & grammar"],
            [20, "Unit 6: A Visit to a School – Lesson 3: Writing about school activities", "Schools, facilities, Sounds: /tʃ/ and /dʒ/", "Prepositions of time and place", "Workbook tasks + speaking/writing on Writing about school activities", "Students can writing about school activities using target vocab & grammar"],
            [21, "Project-based Learning: Healthy Lifestyle Campaign", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: Healthy Lifestyle Campaign", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 2 (Units 4–6)", "Review vocabulary Units 4–6", "Review grammar Units 4–6", "Mini project: school magazine", "Students consolidate Units 4–6"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
        ];

        foreach ($lessons_teen3 as $lesson) {
            $teen3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }
        // ========== ICY TEEN 4 ==========
        $teen4 = Subject::where('name', 'ICY Teen 4')->first();

        $lessons_teen4 = [
            [1, "Unit 7: Traffic – Lesson 1: Reading about traffic rules", "Means of transport, Road signs, Sounds: /aɪ/ and /eɪ/", "It indicating distance, Should/shouldn’t", "Workbook tasks + speaking/writing on Reading about traffic rules", "Students can reading about traffic rules using target vocab & grammar"],
            [2, "Unit 7: Traffic – Lesson 2: Talking about traffic problems", "Means of transport, Road signs, Sounds: /aɪ/ and /eɪ/", "It indicating distance, Should/shouldn’t", "Workbook tasks + speaking/writing on Talking about traffic problems", "Students can talking about traffic problems using target vocab & grammar"],
            [3, "Unit 7: Traffic – Lesson 3: Writing about traffic issues", "Means of transport, Road signs, Sounds: /aɪ/ and /eɪ/", "It indicating distance, Should/shouldn’t", "Workbook tasks + speaking/writing on Writing about traffic issues", "Students can writing about traffic issues using target vocab & grammar"],
            [4, "Unit 8: Films – Lesson 1: Reading about films", "Types of films, Adjectives describing films, Sounds: /iə/ and /eə/", "Connectors: although/though/however", "Workbook tasks + speaking/writing on Reading about films", "Students can reading about films using target vocab & grammar"],
            [5, "Unit 8: Films – Lesson 2: Talking about films", "Types of films, Adjectives describing films, Sounds: /iə/ and /eə/", "Connectors: although/though/however", "Workbook tasks + speaking/writing on Talking about films", "Students can talking about films using target vocab & grammar"],
            [6, "Unit 8: Films – Lesson 3: Writing about a film", "Types of films, Adjectives describing films, Sounds: /iə/ and /eə/", "Connectors: although/though/however", "Workbook tasks + speaking/writing on Writing about a film", "Students can writing about a film using target vocab & grammar"],
            [7, "Unit 9: Festivals Around the World – Lesson 1: Reading about festivals", "Types of festivals, Festival activities, Stress in two-syllable words", "Yes/No questions", "Workbook tasks + speaking/writing on Reading about festivals", "Students can reading about festivals using target vocab & grammar"],
            [8, "Unit 9: Festivals Around the World – Lesson 2: Talking about a festival", "Types of festivals, Festival activities, Stress in two-syllable words", "Yes/No questions", "Workbook tasks + speaking/writing on Talking about a festival", "Students can talking about a festival using target vocab & grammar"],
            [9, "Unit 9: Festivals Around the World – Lesson 3: Writing about festivals", "Types of festivals, Festival activities, Stress in two-syllable words", "Yes/No questions", "Workbook tasks + speaking/writing on Writing about festivals", "Students can writing about festivals using target vocab & grammar"],
            [10, "Review 3 (Units 7–9)", "Review vocabulary Units 7–9", "Review grammar Units 7–9", "Quiz + roleplay project", "Students consolidate Units 7–9"],
            [11, "Unit 10: Energy Sources – Lesson 1: Reading about energy sources", "Types of energy sources, Pronunciation: stress in three-syllable words", "Present continuous", "Workbook tasks + speaking/writing on Reading about energy sources", "Students can reading about energy sources using target vocab & grammar"],
            [12, "Unit 10: Energy Sources – Lesson 2: Talking about energy use", "Types of energy sources, Pronunciation: stress in three-syllable words", "Present continuous", "Workbook tasks + speaking/writing on Talking about energy use", "Students can talking about energy use using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 7–9)", "Students demonstrate mastery of Units 7–9"],
            [14, "Unit 10: Energy Sources – Lesson 3: Writing about saving energy", "Types of energy sources, Pronunciation: stress in three-syllable words", "Present continuous", "Workbook tasks + speaking/writing on Writing about saving energy", "Students can writing about saving energy using target vocab & grammar"],
            [15, "Unit 11: Travelling in the Future – Lesson 1: Reading about transport in the future", "Future means of transport, Pronunciation: sentence stress", "Future simple, Possessive pronouns", "Workbook tasks + speaking/writing on Reading about transport in the future", "Students can reading about transport in the future using target vocab & grammar"],
            [16, "Unit 11: Travelling in the Future – Lesson 2: Talking about transport", "Future means of transport, Pronunciation: sentence stress", "Future simple, Possessive pronouns", "Workbook tasks + speaking/writing on Talking about transport", "Students can talking about transport using target vocab & grammar"],
            [17, "Unit 11: Travelling in the Future – Lesson 3: Writing about future transport", "Future means of transport, Pronunciation: sentence stress", "Future simple, Possessive pronouns", "Workbook tasks + speaking/writing on Writing about future transport", "Students can writing about future transport using target vocab & grammar"],
            [18, "Unit 12: English-speaking Countries – Lesson 1: Reading about English-speaking countries", "People and places in English-speaking countries, Intonation for questions", "Articles", "Workbook tasks + speaking/writing on Reading about English-speaking countries", "Students can reading about english-speaking countries using target vocab & grammar"],
            [19, "Unit 12: English-speaking Countries – Lesson 2: Talking about a country", "People and places in English-speaking countries, Intonation for questions", "Articles", "Workbook tasks + speaking/writing on Talking about a country", "Students can talking about a country using target vocab & grammar"],
            [20, "Unit 12: English-speaking Countries – Lesson 3: Writing a diary about a tour", "People and places in English-speaking countries, Intonation for questions", "Articles", "Workbook tasks + speaking/writing on Writing a diary about a tour", "Students can writing a diary about a tour using target vocab & grammar"],
            [21, "Project-based Learning: International Festival", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: International Festival", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 4 (Units 10–12)", "Review vocabulary Units 10–12", "Review grammar Units 10–12", "Mini project: travel guidebook", "Students consolidate Units 10–12"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_teen4 as $lesson) {
            $teen4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }
        // ========== ICY TEEN 5 ==========
        $teen5 = Subject::where('name', 'ICY Teen 5')->first();

        $lessons_teen5 = [
            [1, "Unit 1: Leisure Time – Lesson 1: Reading about leisure activities", "Leisure activities, Expressions of likes/dislikes, Sounds: /ʊ/ and /u:/", "Verbs of liking + gerunds, Verbs of liking + to-infinitives", "Workbook tasks + speaking/writing on Reading about leisure activities", "Students can reading about leisure activities using target vocab & grammar"],
            [2, "Unit 1: Leisure Time – Lesson 2: Talking about hobbies/leisure", "Leisure activities, Expressions of likes/dislikes, Sounds: /ʊ/ and /u:/", "Verbs of liking + gerunds, Verbs of liking + to-infinitives", "Workbook tasks + speaking/writing on Talking about hobbies/leisure", "Students can talking about hobbies/leisure using target vocab & grammar"],
            [3, "Unit 1: Leisure Time – Lesson 3: Writing an email about leisure", "Leisure activities, Expressions of likes/dislikes, Sounds: /ʊ/ and /u:/", "Verbs of liking + gerunds, Verbs of liking + to-infinitives", "Workbook tasks + speaking/writing on Writing an email about leisure", "Students can writing an email about leisure using target vocab & grammar"],
            [4, "Unit 2: Life in the Countryside – Lesson 1: Reading about countryside life", "Life in countryside, Sounds: /a:/ and /i/", "Comparatives of adverbs", "Workbook tasks + speaking/writing on Reading about countryside life", "Students can reading about countryside life using target vocab & grammar"],
            [5, "Unit 2: Life in the Countryside – Lesson 2: Talking about villages", "Life in countryside, Sounds: /a:/ and /i/", "Comparatives of adverbs", "Workbook tasks + speaking/writing on Talking about villages", "Students can talking about villages using target vocab & grammar"],
            [6, "Unit 2: Life in the Countryside – Lesson 3: Writing about life in the countryside", "Life in countryside, Sounds: /a:/ and /i/", "Comparatives of adverbs", "Workbook tasks + speaking/writing on Writing about life in the countryside", "Students can writing about life in the countryside using target vocab & grammar"],
            [7, "Unit 3: Teenagers – Lesson 1: Reading about school clubs", "Teen school clubs, Teen stress, Sounds: /əʊ/ and /ɔ:/", "Simple sentences, Compound sentences", "Workbook tasks + speaking/writing on Reading about school clubs", "Students can reading about school clubs using target vocab & grammar"],
            [8, "Unit 3: Teenagers – Lesson 2: Talking about teen stress", "Teen school clubs, Teen stress, Sounds: /əʊ/ and /ɔ:/", "Simple sentences, Compound sentences", "Workbook tasks + speaking/writing on Talking about teen stress", "Students can talking about teen stress using target vocab & grammar"],
            [9, "Unit 3: Teenagers – Lesson 3: Writing about causes of stress", "Teen school clubs, Teen stress, Sounds: /əʊ/ and /ɔ:/", "Simple sentences, Compound sentences", "Workbook tasks + speaking/writing on Writing about causes of stress", "Students can writing about causes of stress using target vocab & grammar"],
            [10, "Review 1 (Units 1–3)", "Review vocabulary Units 1–3", "Review grammar Units 1–3", "Quiz + mini-poster project", "Students consolidate Units 1–3"],
            [11, "Unit 4: Ethnic Groups of Viet Nam – Lesson 1: Reading about ethnic homes", "Ethnic groups, Pronunciation: /k/ and /g/", "Yes/No and Wh-questions, Countable/uncountable nouns", "Workbook tasks + speaking/writing on Reading about ethnic homes", "Students can reading about ethnic homes using target vocab & grammar"],
            [12, "Unit 4: Ethnic Groups of Viet Nam – Lesson 2: Talking about ethnic life", "Ethnic groups, Pronunciation: /k/ and /g/", "Yes/No and Wh-questions, Countable/uncountable nouns", "Workbook tasks + speaking/writing on Talking about ethnic life", "Students can talking about ethnic life using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–3)", "Students demonstrate mastery of Units 1–3"],
            [14, "Unit 4: Ethnic Groups of Viet Nam – Lesson 3: Writing about helping family", "Ethnic groups, Pronunciation: /k/ and /g/", "Yes/No and Wh-questions, Countable/uncountable nouns", "Workbook tasks + speaking/writing on Writing about helping family", "Students can writing about helping family using target vocab & grammar"],
            [15, "Unit 5: Our Customs and Traditions – Lesson 1: Reading about festivals", "Customs & traditions, Sounds: /n/ and /ŋ/", "Zero article", "Workbook tasks + speaking/writing on Reading about festivals", "Students can reading about festivals using target vocab & grammar"],
            [16, "Unit 5: Our Customs and Traditions – Lesson 2: Talking about family events", "Customs & traditions, Sounds: /n/ and /ŋ/", "Zero article", "Workbook tasks + speaking/writing on Talking about family events", "Students can talking about family events using target vocab & grammar"],
            [17, "Unit 5: Our Customs and Traditions – Lesson 3: Writing about traditional festivals", "Customs & traditions, Sounds: /n/ and /ŋ/", "Zero article", "Workbook tasks + speaking/writing on Writing about traditional festivals", "Students can writing about traditional festivals using target vocab & grammar"],
            [18, "Unit 6: Lifestyles – Lesson 1: Reading about lifestyles", "Different lifestyles, Sounds: /br/ and /pr/", "Future simple, First conditional", "Workbook tasks + speaking/writing on Reading about lifestyles", "Students can reading about lifestyles using target vocab & grammar"],
            [19, "Unit 6: Lifestyles – Lesson 2: Talking about lifestyles", "Different lifestyles, Sounds: /br/ and /pr/", "Future simple, First conditional", "Workbook tasks + speaking/writing on Talking about lifestyles", "Students can talking about lifestyles using target vocab & grammar"],
            [20, "Unit 6: Lifestyles – Lesson 3: Writing about online learning vs. tradition", "Different lifestyles, Sounds: /br/ and /pr/", "Future simple, First conditional", "Workbook tasks + speaking/writing on Writing about online learning vs. tradition", "Students can writing about online learning vs. tradition using target vocab & grammar"],
            [21, "Project-based Learning: Vietnamese Culture Expo", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a cultural project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: Vietnamese Culture Expo", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a cultural project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 2 (Units 4–6)", "Review vocabulary Units 4–6", "Review grammar Units 4–6", "Project: lifestyle magazine", "Students consolidate Units 4–6"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
        ];

        foreach ($lessons_teen5 as $lesson) {
            $teen5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }
        // ========== ICY TEEN 6 ==========
        $teen6 = Subject::where('name', 'ICY Teen 6')->first();

        $lessons_teen6 = [
            [1, "Unit 7: Environmental Protection – Lesson 1: Reading about national parks", "Environmental protection, Sounds: /bl/ and /kl/", "Complex sentences, Adverb clauses of time", "Workbook tasks + speaking/writing on Reading about national parks", "Students can reading about national parks using target vocab & grammar"],
            [2, "Unit 7: Environmental Protection – Lesson 2: Talking about environmental issues", "Environmental protection, Sounds: /bl/ and /kl/", "Complex sentences, Adverb clauses of time", "Workbook tasks + speaking/writing on Talking about environmental issues", "Students can talking about environmental issues using target vocab & grammar"],
            [3, "Unit 7: Environmental Protection – Lesson 3: Writing notices about pollution", "Environmental protection, Sounds: /bl/ and /kl/", "Complex sentences, Adverb clauses of time", "Workbook tasks + speaking/writing on Writing notices about pollution", "Students can writing notices about pollution using target vocab & grammar"],
            [4, "Unit 8: Shopping – Lesson 1: Reading about shopping habits", "Shopping, Sounds: /sp/ and /st/", "Adverbs of frequency, Present simple for future events", "Workbook tasks + speaking/writing on Reading about shopping habits", "Students can reading about shopping habits using target vocab & grammar"],
            [5, "Unit 8: Shopping – Lesson 2: Talking about shopping places", "Shopping, Sounds: /sp/ and /st/", "Adverbs of frequency, Present simple for future events", "Workbook tasks + speaking/writing on Talking about shopping places", "Students can talking about shopping places using target vocab & grammar"],
            [6, "Unit 8: Shopping – Lesson 3: Writing about online shopping", "Shopping, Sounds: /sp/ and /st/", "Adverbs of frequency, Present simple for future events", "Workbook tasks + speaking/writing on Writing about online shopping", "Students can writing about online shopping using target vocab & grammar"],
            [7, "Unit 9: Natural Disasters – Lesson 1: Reading about disasters", "Types of disasters, Disaster words, Stress: -al, -ous words", "Past continuous", "Workbook tasks + speaking/writing on Reading about disasters", "Students can reading about disasters using target vocab & grammar"],
            [8, "Unit 9: Natural Disasters – Lesson 2: Talking about disaster safety", "Types of disasters, Disaster words, Stress: -al, -ous words", "Past continuous", "Workbook tasks + speaking/writing on Talking about disaster safety", "Students can talking about disaster safety using target vocab & grammar"],
            [9, "Unit 9: Natural Disasters – Lesson 3: Writing instructions for disaster preparedness", "Types of disasters, Disaster words, Stress: -al, -ous words", "Past continuous", "Workbook tasks + speaking/writing on Writing instructions for disaster preparedness", "Students can writing instructions for disaster preparedness using target vocab & grammar"],
            [10, "Review 3 (Units 7–9)", "Review vocabulary Units 7–9", "Review grammar Units 7–9", "Quiz + project: environment campaign", "Students consolidate Units 7–9"],
            [11, "Unit 10: Communication in the Future – Lesson 1: Reading about communication", "Communication technology, Stress in -ese, -ee words", "Prepositions of place & time, Possessive pronouns", "Workbook tasks + speaking/writing on Reading about communication", "Students can reading about communication using target vocab & grammar"],
            [12, "Unit 10: Communication in the Future – Lesson 2: Talking about communication methods", "Communication technology, Stress in -ese, -ee words", "Prepositions of place & time, Possessive pronouns", "Workbook tasks + speaking/writing on Talking about communication methods", "Students can talking about communication methods using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 7–9)", "Students demonstrate mastery of Units 7–9"],
            [14, "Unit 10: Communication in the Future – Lesson 3: Writing about modern communication", "Communication technology, Stress in -ese, -ee words", "Prepositions of place & time, Possessive pronouns", "Workbook tasks + speaking/writing on Writing about modern communication", "Students can writing about modern communication using target vocab & grammar"],
            [15, "Unit 11: Science and Technology – Lesson 1: Reading about new technologies", "Science & tech in the future, Sentence stress", "Reported speech (statements)", "Workbook tasks + speaking/writing on Reading about new technologies", "Students can reading about new technologies using target vocab & grammar"],
            [16, "Unit 11: Science and Technology – Lesson 2: Talking about inventions", "Science & tech in the future, Sentence stress", "Reported speech (statements)", "Workbook tasks + speaking/writing on Talking about inventions", "Students can talking about inventions using target vocab & grammar"],
            [17, "Unit 11: Science and Technology – Lesson 3: Writing opinions about robots", "Science & tech in the future, Sentence stress", "Reported speech (statements)", "Workbook tasks + speaking/writing on Writing opinions about robots", "Students can writing opinions about robots using target vocab & grammar"],
            [18, "Unit 12: Life on Other Planets – Lesson 1: Reading about space life", "Outer space, Intonation for making lists", "Reported speech (questions)", "Workbook tasks + speaking/writing on Reading about space life", "Students can reading about space life using target vocab & grammar"],
            [19, "Unit 12: Life on Other Planets – Lesson 2: Talking about planets", "Outer space, Intonation for making lists", "Reported speech (questions)", "Workbook tasks + speaking/writing on Talking about planets", "Students can talking about planets using target vocab & grammar"],
            [20, "Unit 12: Life on Other Planets – Lesson 3: Writing about imaginary creatures", "Outer space, Intonation for making lists", "Reported speech (questions)", "Workbook tasks + speaking/writing on Writing about imaginary creatures", "Students can writing about imaginary creatures using target vocab & grammar"],
            [21, "Project-based Learning: Future World & Space", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a creative project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: Future World & Space", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a creative project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 4 (Units 10–12)", "Review vocabulary Units 10–12", "Review grammar Units 10–12", "Mini project: future technology fair", "Students consolidate Units 10–12"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_teen6 as $lesson) {
            $teen6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY TEEN 7 ==========
        $teen7 = Subject::where('name', 'ICY Teen 7')->first();

        $lessons_teen7 = [
            [1, "Unit 1: Local Community – Lesson 1: Reading about community helpers", "Community helpers, Traditional handicrafts, Sounds: /æ/, /ɑː/, /e/", "Question words before to-infinitives, Phrasal verbs (1)", "Workbook tasks + speaking/writing on Reading about community helpers", "Students can reading about community helpers using target vocab & grammar"],
            [2, "Unit 1: Local Community – Lesson 2: Talking about specialities", "Community helpers, Traditional handicrafts, Sounds: /æ/, /ɑː/, /e/", "Question words before to-infinitives, Phrasal verbs (1)", "Workbook tasks + speaking/writing on Talking about specialities", "Students can talking about specialities using target vocab & grammar"],
            [3, "Unit 1: Local Community – Lesson 3: Writing about community helpers", "Community helpers, Traditional handicrafts, Sounds: /æ/, /ɑː/, /e/", "Question words before to-infinitives, Phrasal verbs (1)", "Workbook tasks + speaking/writing on Writing about community helpers", "Students can writing about community helpers using target vocab & grammar"],
            [4, "Unit 2: City Life – Lesson 1: Reading about city problems", "City life, Diphthongs: /aʊ/, /əʊ/, /eə/", "Double comparatives, Phrasal verbs (2)", "Workbook tasks + speaking/writing on Reading about city problems", "Students can reading about city problems using target vocab & grammar"],
            [5, "Unit 2: City Life – Lesson 2: Talking about city life", "City life, Diphthongs: /aʊ/, /əʊ/, /eə/", "Double comparatives, Phrasal verbs (2)", "Workbook tasks + speaking/writing on Talking about city life", "Students can talking about city life using target vocab & grammar"],
            [6, "Unit 2: City Life – Lesson 3: Writing about city life", "City life, Diphthongs: /aʊ/, /əʊ/, /eə/", "Double comparatives, Phrasal verbs (2)", "Workbook tasks + speaking/writing on Writing about city life", "Students can writing about city life using target vocab & grammar"],
            [7, "Unit 3: Healthy Living for Teens – Lesson 1: Reading about balanced lifestyles", "Student life, Sounds: /h/ and /r/", "Modal verbs in first conditional", "Workbook tasks + speaking/writing on Reading about balanced lifestyles", "Students can reading about balanced lifestyles using target vocab & grammar"],
            [8, "Unit 3: Healthy Living for Teens – Lesson 2: Talking about student life", "Student life, Sounds: /h/ and /r/", "Modal verbs in first conditional", "Workbook tasks + speaking/writing on Talking about student life", "Students can talking about student life using target vocab & grammar"],
            [9, "Unit 3: Healthy Living for Teens – Lesson 3: Writing about time management", "Student life, Sounds: /h/ and /r/", "Modal verbs in first conditional", "Workbook tasks + speaking/writing on Writing about time management", "Students can writing about time management using target vocab & grammar"],
            [10, "Review 1 (Units 1–3)", "Review vocabulary Units 1–3", "Review grammar Units 1–3", "Quiz + class debate", "Students consolidate Units 1–3"],
            [11, "Unit 4: Remembering the Past – Lesson 1: Reading about the past", "Life in the past, Values of the past, Sounds: /m/ and /l/", "Past continuous, Wish + past simple", "Workbook tasks + speaking/writing on Reading about the past", "Students can reading about the past using target vocab & grammar"],
            [12, "Unit 4: Remembering the Past – Lesson 2: Talking about traditional dishes", "Life in the past, Values of the past, Sounds: /m/ and /l/", "Past continuous, Wish + past simple", "Workbook tasks + speaking/writing on Talking about traditional dishes", "Students can talking about traditional dishes using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–3)", "Students demonstrate mastery of Units 1–3"],
            [14, "Unit 4: Remembering the Past – Lesson 3: Writing about old school days", "Life in the past, Values of the past, Sounds: /m/ and /l/", "Past continuous, Wish + past simple", "Workbook tasks + speaking/writing on Writing about old school days", "Students can writing about old school days using target vocab & grammar"],
            [15, "Unit 5: Our Experiences – Lesson 1: Reading about summer experiences", "Experiences, Adjectives of experiences, Sounds: /j/ and /w/", "Present perfect", "Workbook tasks + speaking/writing on Reading about summer experiences", "Students can reading about summer experiences using target vocab & grammar"],
            [16, "Unit 5: Our Experiences – Lesson 2: Talking about experiences", "Experiences, Adjectives of experiences, Sounds: /j/ and /w/", "Present perfect", "Workbook tasks + speaking/writing on Talking about experiences", "Students can talking about experiences using target vocab & grammar"],
            [17, "Unit 5: Our Experiences – Lesson 3: Writing about pleasant/unpleasant experiences", "Experiences, Adjectives of experiences, Sounds: /j/ and /w/", "Present perfect", "Workbook tasks + speaking/writing on Writing about pleasant/unpleasant experiences", "Students can writing about pleasant/unpleasant experiences using target vocab & grammar"],
            [18, "Unit 6: Vietnamese Lifestyle: Then and Now – Lesson 1: Reading about lifestyles", "Lifestyle changes, Sounds: /fl/ and /fr/", "Verbs + to-infinitive, Verbs + V-ing", "Workbook tasks + speaking/writing on Reading about lifestyles", "Students can reading about lifestyles using target vocab & grammar"],
            [19, "Unit 6: Vietnamese Lifestyle: Then and Now – Lesson 2: Talking about lifestyle changes", "Lifestyle changes, Sounds: /fl/ and /fr/", "Verbs + to-infinitive, Verbs + V-ing", "Workbook tasks + speaking/writing on Talking about lifestyle changes", "Students can talking about lifestyle changes using target vocab & grammar"],
            [20, "Unit 6: Vietnamese Lifestyle: Then and Now – Lesson 3: Writing about family changes", "Lifestyle changes, Sounds: /fl/ and /fr/", "Verbs + to-infinitive, Verbs + V-ing", "Workbook tasks + speaking/writing on Writing about family changes", "Students can writing about family changes using target vocab & grammar"],
            [21, "Project-based Learning: My Community & Lifestyle", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a group project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: My Community & Lifestyle", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a group project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 2 (Units 4–6)", "Review vocabulary Units 4–6", "Review grammar Units 4–6", "Mini project: lifestyle survey report", "Students consolidate Units 4–6"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
        ];

        foreach ($lessons_teen7 as $lesson) {
            $teen7->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY TEEN 8 ==========
        $teen8 = Subject::where('name', 'ICY Teen 8')->first();

        $lessons_teen8 = [
            [1, "Unit 7: Natural Wonders of the World – Lesson 1: Reading about natural wonders", "Natural wonders, Sounds: /ʃ/ and /sn/", "Reported speech (Yes/No questions)", "Workbook tasks + speaking/writing on Reading about natural wonders", "Students can reading about natural wonders using target vocab & grammar"],
            [2, "Unit 7: Natural Wonders of the World – Lesson 2: Talking about natural wonders", "Natural wonders, Sounds: /ʃ/ and /sn/", "Reported speech (Yes/No questions)", "Workbook tasks + speaking/writing on Talking about natural wonders", "Students can talking about natural wonders using target vocab & grammar"],
            [3, "Unit 7: Natural Wonders of the World – Lesson 3: Writing about a natural wonder", "Natural wonders, Sounds: /ʃ/ and /sn/", "Reported speech (Yes/No questions)", "Workbook tasks + speaking/writing on Writing about a natural wonder", "Students can writing about a natural wonder using target vocab & grammar"],
            [4, "Unit 8: Tourism – Lesson 1: Reading about tours", "Tourism, Stress in -ic, -ious words", "Relative pronouns", "Workbook tasks + speaking/writing on Reading about tours", "Students can reading about tours using target vocab & grammar"],
            [5, "Unit 8: Tourism – Lesson 2: Talking about travel", "Tourism, Stress in -ic, -ious words", "Relative pronouns", "Workbook tasks + speaking/writing on Talking about travel", "Students can talking about travel using target vocab & grammar"],
            [6, "Unit 8: Tourism – Lesson 3: Writing about a tour", "Tourism, Stress in -ic, -ious words", "Relative pronouns", "Workbook tasks + speaking/writing on Writing about a tour", "Students can writing about a tour using target vocab & grammar"],
            [7, "Unit 9: World Englishes – Lesson 1: Reading about English worldwide", "Aspects of language, Stress in -ion, -ity words", "Defining relative clauses", "Workbook tasks + speaking/writing on Reading about English worldwide", "Students can reading about english worldwide using target vocab & grammar"],
            [8, "Unit 9: World Englishes – Lesson 2: Talking about borrowed words", "Aspects of language, Stress in -ion, -ity words", "Defining relative clauses", "Workbook tasks + speaking/writing on Talking about borrowed words", "Students can talking about borrowed words using target vocab & grammar"],
            [9, "Unit 9: World Englishes – Lesson 3: Writing about English learning", "Aspects of language, Stress in -ion, -ity words", "Defining relative clauses", "Workbook tasks + speaking/writing on Writing about English learning", "Students can writing about english learning using target vocab & grammar"],
            [10, "Review 3 (Units 7–9)", "Review vocabulary Units 7–9", "Review grammar Units 7–9", "Quiz + travel brochure project", "Students consolidate Units 7–9"],
            [11, "Unit 10: Planet Earth – Lesson 1: Reading about flora & fauna", "Planet Earth, Habitats, Rhythm in sentences", "Non-defining relative clauses", "Workbook tasks + speaking/writing on Reading about flora & fauna", "Students can reading about flora & fauna using target vocab & grammar"],
            [12, "Unit 10: Planet Earth – Lesson 2: Talking about environmental protection", "Planet Earth, Habitats, Rhythm in sentences", "Non-defining relative clauses", "Workbook tasks + speaking/writing on Talking about environmental protection", "Students can talking about environmental protection using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 7–9)", "Students demonstrate mastery of Units 7–9"],
            [14, "Unit 10: Planet Earth – Lesson 3: Writing a summary about environment", "Planet Earth, Habitats, Rhythm in sentences", "Non-defining relative clauses", "Workbook tasks + speaking/writing on Writing a summary about environment", "Students can writing a summary about environment using target vocab & grammar"],
            [15, "Unit 11: Electronic Devices – Lesson 1: Reading about devices", "Electronic devices, Stress in sentences", "Suggest/advise/recommend + V-ing, Should clauses", "Workbook tasks + speaking/writing on Reading about devices", "Students can reading about devices using target vocab & grammar"],
            [16, "Unit 11: Electronic Devices – Lesson 2: Talking about electronics", "Electronic devices, Stress in sentences", "Suggest/advise/recommend + V-ing, Should clauses", "Workbook tasks + speaking/writing on Talking about electronics", "Students can talking about electronics using target vocab & grammar"],
            [17, "Unit 11: Electronic Devices – Lesson 3: Writing about future technology", "Electronic devices, Stress in sentences", "Suggest/advise/recommend + V-ing, Should clauses", "Workbook tasks + speaking/writing on Writing about future technology", "Students can writing about future technology using target vocab & grammar"],
            [18, "Unit 12: Career Choices – Lesson 1: Reading about jobs", "Jobs, Intonation in questions", "Adverbial clauses (concession, result, reason)", "Workbook tasks + speaking/writing on Reading about jobs", "Students can reading about jobs using target vocab & grammar"],
            [19, "Unit 12: Career Choices – Lesson 2: Talking about careers", "Jobs, Intonation in questions", "Adverbial clauses (concession, result, reason)", "Workbook tasks + speaking/writing on Talking about careers", "Students can talking about careers using target vocab & grammar"],
            [20, "Unit 12: Career Choices – Lesson 3: Writing an email about job choice", "Jobs, Intonation in questions", "Adverbial clauses (concession, result, reason)", "Workbook tasks + speaking/writing on Writing an email about job choice", "Students can writing about job choice using target vocab & grammar"],
            [21, "Project-based Learning: Global English & Careers", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a creative project", "Students apply knowledge creatively in real tasks"],
            [22, "Project-based Learning: Global English & Careers", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a creative project", "Students apply knowledge creatively in real tasks"],
            [23, "Review 4 (Units 10–12)", "Review vocabulary Units 10–12", "Review grammar Units 10–12", "Mini project: career fair roleplay", "Students consolidate Units 10–12"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_teen8 as $lesson) {
            $teen8->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 1 ==========
        $ic1 = Subject::where('name', 'ICY Communication 1')->first();

        $lessons_ic1 = [
            [1, "Unit 1: Introductions and Names – Lesson 1: Listening for greetings", "Greetings vocabulary, Linking vowel sounds", "Basic greetings structures", "Workbook tasks + speaking/writing on Listening for greetings", "Students can listening for greetings using target vocab & grammar"],
            [2, "Unit 1: Introductions and Names – Lesson 2: Talking about introductions", "Greetings vocabulary, Linking vowel sounds", "Basic greetings structures", "Workbook tasks + speaking/writing on Talking about introductions", "Students can talking about introductions using target vocab & grammar"],
            [3, "Unit 2: Describing People – Lesson 1: Listening about physical appearance", "Appearance vocabulary, Intonation of Yes/No questions", "Yes/No question forms", "Workbook tasks + speaking/writing on Listening about physical appearance", "Students can listening about physical appearance using target vocab & grammar"],
            [4, "Unit 2: Describing People – Lesson 2: Talking about people", "Appearance vocabulary, Intonation of Yes/No questions", "Yes/No question forms", "Workbook tasks + speaking/writing on Talking about people", "Students can talking about people using target vocab & grammar"],
            [5, "Unit 3: Clothes – Lesson 1: Listening about clothes", "Clothes vocabulary, Plural -s endings", "Noun plurals", "Workbook tasks + speaking/writing on Listening about clothes", "Students can listening about clothes using target vocab & grammar"],
            [6, "Unit 3: Clothes – Lesson 2: Talking about fashion", "Clothes vocabulary, Plural -s endings", "Noun plurals", "Workbook tasks + speaking/writing on Talking about fashion", "Students can talking about fashion using target vocab & grammar"],
            [7, "Unit 4: Routines – Lesson 1: Listening about routines", "Numbers, routines, Syllable stress in numbers", "Present simple", "Workbook tasks + speaking/writing on Listening about routines", "Students can listening about routines using target vocab & grammar"],
            [8, "Unit 4: Routines – Lesson 2: Talking about routines", "Numbers, routines, Syllable stress in numbers", "Present simple", "Workbook tasks + speaking/writing on Talking about routines", "Students can talking about routines using target vocab & grammar"],
            [9, "Unit 5: Dates – Lesson 1: Listening about dates", "Dates vocabulary, Ordinal numbers", "Using ordinal numbers", "Workbook tasks + speaking/writing on Listening about dates", "Students can listening about dates using target vocab & grammar"],
            [10, "Unit 6: Jobs – Lesson 1: Listening about jobs", "Jobs vocabulary, Syllable stress in words", "Job expressions", "Workbook tasks + speaking/writing on Listening about jobs", "Students can listening about jobs using target vocab & grammar"],
            [11, "Unit 6: Jobs – Lesson 2: Talking about jobs", "Jobs vocabulary, Syllable stress in words", "Job expressions", "Workbook tasks + speaking/writing on Talking about jobs", "Students can talking about jobs using target vocab & grammar"],
            [12, "Unit 7: Favorites – Lesson 1: Listening about favorites", "Favorites vocabulary, Intonation of Wh-questions", "Wh-questions", "Workbook tasks + speaking/writing on Listening about favorites", "Students can listening about favorites using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Favorites – Lesson 2: Talking about favorite things", "Favorites vocabulary, Intonation of Wh-questions", "Wh-questions", "Workbook tasks + speaking/writing on Talking about favorite things", "Students can talking about favorite things using target vocab & grammar"],
            [15, "Unit 8: Sports and Exercise – Lesson 1: Listening about sports", "Sports vocabulary, Sentence stress", "Frequency adverbs", "Workbook tasks + speaking/writing on Listening about sports", "Students can listening about sports using target vocab & grammar"],
            [16, "Unit 8: Sports and Exercise – Lesson 2: Talking about sports", "Sports vocabulary, Sentence stress", "Frequency adverbs", "Workbook tasks + speaking/writing on Talking about sports", "Students can talking about sports using target vocab & grammar"],
            [17, "Unit 9: Locations – Lesson 1: Listening about locations", "Locations vocabulary, Contracted 'not'", "Prepositions of place", "Workbook tasks + speaking/writing on Listening about locations", "Students can listening about locations using target vocab & grammar"],
            [18, "Unit 9: Locations – Lesson 2: Talking about locations", "Locations vocabulary, Contracted 'not'", "Prepositions of place", "Workbook tasks + speaking/writing on Talking about locations", "Students can talking about locations using target vocab & grammar"],
            [19, "Unit 10: The Family – Lesson 1: Listening about families", "Family vocabulary, Reduction of do/does/are", "Possessive adjectives", "Workbook tasks + speaking/writing on Listening about families", "Students can listening about families using target vocab & grammar"],
            [20, "Unit 11: Entertainment – Lesson 1: Listening about invitations", "Entertainment vocabulary, Reduction of vowel sound in 'can'", "Invitation expressions", "Workbook tasks + speaking/writing on Listening about invitations", "Students can listening about invitations using target vocab & grammar"],
            [21, "Unit 11: Entertainment – Lesson 2: Making invitations", "Entertainment vocabulary, Reduction of vowel sound in 'can'", "Invitation expressions", "Workbook tasks + speaking/writing on Making invitations", "Students can making invitations using target vocab & grammar"],
            [22, "Unit 12: Prices – Lesson 1: Listening about prices", "Money, prices, Saying large numbers", "Comparisons with numbers", "Workbook tasks + speaking/writing on Listening about prices", "Students can listening about prices using target vocab & grammar"],
            [23, "Unit 12: Prices – Lesson 2: Talking about money", "Money, prices, Saying large numbers", "Comparisons with numbers", "Workbook tasks + speaking/writing on Talking about money", "Students can talking about money using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_ic1 as $lesson) {
            $ic1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 2 ==========

        $ic2 = Subject::where('name', 'ICY Communication 2')->first();

        $lessons_ic2 = [
            [1, "Unit 13: Restaurants – Lesson 1: Listening about meals", "Food vocabulary, Past tense wasn’t/weren’t", "Talking about past events", "Workbook tasks + speaking/writing on Listening about meals", "Students can listening about meals using target vocab & grammar"],
            [2, "Unit 13: Restaurants – Lesson 2: Talking about food", "Food vocabulary, Past tense wasn’t/weren’t", "Talking about past events", "Workbook tasks + speaking/writing on Talking about food", "Students can talking about food using target vocab & grammar"],
            [3, "Unit 14: Small Talk – Lesson 1: Listening to greetings", "Greetings, Reduction of Wh-questions", "Wh-question forms", "Workbook tasks + speaking/writing on Listening to greetings", "Students can listening to greetings using target vocab & grammar"],
            [4, "Unit 15: Vacations – Lesson 1: Listening about vacations", "Vacations, Past tense -ed endings", "Past tense verbs", "Workbook tasks + speaking/writing on Listening about vacations", "Students can listening about vacations using target vocab & grammar"],
            [5, "Unit 15: Vacations – Lesson 2: Talking about trips", "Vacations, Past tense -ed endings", "Past tense verbs", "Workbook tasks + speaking/writing on Talking about trips", "Students can talking about trips using target vocab & grammar"],
            [6, "Unit 16: Apartment Living – Lesson 1: Listening about apartments", "Rooms vocabulary, Contractions: there is/are", "There is/are usage", "Workbook tasks + speaking/writing on Listening about apartments", "Students can listening about apartments using target vocab & grammar"],
            [7, "Unit 16: Apartment Living – Lesson 2: Talking about rooms", "Rooms vocabulary, Contractions: there is/are", "There is/are usage", "Workbook tasks + speaking/writing on Talking about rooms", "Students can talking about rooms using target vocab & grammar"],
            [8, "Unit 17: Hopes and Plans – Lesson 1: Listening about future plans", "Future plans vocabulary, Reduction of want to, going to", "Future forms", "Workbook tasks + speaking/writing on Listening about future plans", "Students can listening about future plans using target vocab & grammar"],
            [9, "Unit 17: Hopes and Plans – Lesson 2: Talking about hopes", "Future plans vocabulary, Reduction of want to, going to", "Future forms", "Workbook tasks + speaking/writing on Talking about hopes", "Students can talking about hopes using target vocab & grammar"],
            [10, "Unit 18: The Weather – Lesson 1: Listening about weather", "Weather vocabulary, Intonation of series", "Weather expressions", "Workbook tasks + speaking/writing on Listening about weather", "Students can listening about weather using target vocab & grammar"],
            [11, "Unit 18: The Weather – Lesson 2: Talking about weather", "Weather vocabulary, Intonation of series", "Weather expressions", "Workbook tasks + speaking/writing on Talking about weather", "Students can talking about weather using target vocab & grammar"],
            [12, "Unit 19: Shopping – Lesson 1: Listening about shopping", "Shopping vocabulary, Contrastive stress", "Shopping expressions", "Workbook tasks + speaking/writing on Listening about shopping", "Students can listening about shopping using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 13–18)", "Students demonstrate mastery of Units 13–18"],
            [14, "Unit 19: Shopping – Lesson 2: Talking about stores", "Shopping vocabulary, Contrastive stress", "Shopping expressions", "Workbook tasks + speaking/writing on Talking about stores", "Students can talking about stores using target vocab & grammar"],
            [15, "Unit 20: Describing Things – Lesson 1: Listening about objects", "Objects vocabulary, Syllable stress in adjectives", "Describing objects", "Workbook tasks + speaking/writing on Listening about objects", "Students can listening about objects using target vocab & grammar"],
            [16, "Unit 20: Describing Things – Lesson 2: Talking about possessions", "Objects vocabulary, Syllable stress in adjectives", "Describing objects", "Workbook tasks + speaking/writing on Talking about possessions", "Students can talking about possessions using target vocab & grammar"],
            [17, "Unit 21: Directions – Lesson 1: Listening about directions", "Places vocabulary, Intonation for confirming info", "Asking for/giving directions", "Workbook tasks + speaking/writing on Listening about directions", "Students can listening about directions using target vocab & grammar"],
            [18, "Unit 21: Directions – Lesson 2: Talking about streets", "Places vocabulary, Intonation for confirming info", "Asking for/giving directions", "Workbook tasks + speaking/writing on Talking about streets", "Students can talking about streets using target vocab & grammar"],
            [19, "Unit 22: People We Know – Lesson 1: Listening about people", "People vocabulary, Third person -s", "Describing people", "Workbook tasks + speaking/writing on Listening about people", "Students can listening about people using target vocab & grammar"],
            [20, "Unit 23: Places – Lesson 1: Listening about cities", "Cities & countries, Sentence stress", "Comparisons of places", "Workbook tasks + speaking/writing on Listening about cities", "Students can listening about cities using target vocab & grammar"],
            [21, "Unit 23: Places – Lesson 2: Talking about places", "Cities & countries, Sentence stress", "Comparisons of places", "Workbook tasks + speaking/writing on Talking about places", "Students can talking about places using target vocab & grammar"],
            [22, "Unit 24: Health – Lesson 1: Listening about health", "Health vocabulary, Reduction of 'did you'", "Health expressions", "Workbook tasks + speaking/writing on Listening about health", "Students can listening about health using target vocab & grammar"],
            [23, "Unit 24: Health – Lesson 2: Talking about health", "Health vocabulary, Reduction of 'did you'", "Health expressions", "Workbook tasks + speaking/writing on Talking about health", "Students can talking about health using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 19–24)", "Students demonstrate mastery of Units 19–24"],
        ];

        foreach ($lessons_ic2 as $lesson) {
            $ic2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 3 ==========
        $ic3 = Subject::where('name', 'ICY Communication 3')->first();

        $lessons_ic3 = [
            [1, "Unit 1: Restaurants – Lesson 1: Listening to conversations", "Restaurant vocabulary, Sentence stress", "Would like + noun", "Workbook tasks + speaking/writing on Listening to conversations", "Students can listening to conversations using target vocab & grammar"],
            [2, "Unit 1: Restaurants – Lesson 2: Ordering food", "Restaurant vocabulary, Sentence stress", "Would like + noun", "Workbook tasks + speaking/writing on Ordering food", "Students can ordering food using target vocab & grammar"],
            [3, "Unit 2: Time – Lesson 1: Listening about time", "Time vocabulary, Syllable stress", "Prepositions of time", "Workbook tasks + speaking/writing on Listening about time", "Students can listening about time using target vocab & grammar"],
            [4, "Unit 2: Time – Lesson 2: Talking about time", "Time vocabulary, Syllable stress", "Prepositions of time", "Workbook tasks + speaking/writing on Talking about time", "Students can talking about time using target vocab & grammar"],
            [5, "Unit 3: Daily Routines – Lesson 1: Listening about routines", "Routine vocabulary, Third person -s", "Present simple", "Workbook tasks + speaking/writing on Listening about routines", "Students can listening about routines using target vocab & grammar"],
            [6, "Unit 3: Daily Routines – Lesson 2: Talking about routines", "Routine vocabulary, Third person -s", "Present simple", "Workbook tasks + speaking/writing on Talking about routines", "Students can talking about routines using target vocab & grammar"],
            [7, "Unit 4: Jobs – Lesson 1: Listening about jobs", "Jobs vocabulary, Word stress in compound nouns", "Present continuous", "Workbook tasks + speaking/writing on Listening about jobs", "Students can listening about jobs using target vocab & grammar"],
            [8, "Unit 4: Jobs – Lesson 2: Talking about jobs", "Jobs vocabulary, Word stress in compound nouns", "Present continuous", "Workbook tasks + speaking/writing on Talking about jobs", "Students can talking about jobs using target vocab & grammar"],
            [9, "Unit 5: Hobbies – Lesson 1: Listening about hobbies", "Hobbies vocabulary, Syllable stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Listening about hobbies", "Students can listening about hobbies using target vocab & grammar"],
            [10, "Unit 5: Hobbies – Lesson 2: Talking about hobbies", "Hobbies vocabulary, Syllable stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Talking about hobbies", "Students can talking about hobbies using target vocab & grammar"],
            [11, "Unit 6: Family – Lesson 1: Listening about family members", "Family vocabulary, Sentence stress", "Possessive adjectives", "Workbook tasks + speaking/writing on Listening about family members", "Students can listening about family members using target vocab & grammar"],
            [12, "Unit 6: Family – Lesson 2: Talking about family", "Family vocabulary, Sentence stress", "Possessive adjectives", "Workbook tasks + speaking/writing on Talking about family", "Students can talking about family using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Places in Town – Lesson 1: Listening about places", "Places vocabulary, Weak forms", "There is/are", "Workbook tasks + speaking/writing on Listening about places", "Students can listening about places using target vocab & grammar"],
            [15, "Unit 7: Places in Town – Lesson 2: Talking about places", "Places vocabulary, Weak forms", "There is/are", "Workbook tasks + speaking/writing on Talking about places", "Students can talking about places using target vocab & grammar"],
            [16, "Unit 8: Directions – Lesson 1: Listening about directions", "Directions vocabulary, Intonation of questions", "Giving directions", "Workbook tasks + speaking/writing on Listening about directions", "Students can listening about directions using target vocab & grammar"],
            [17, "Unit 8: Directions – Lesson 2: Talking about directions", "Directions vocabulary, Intonation of questions", "Giving directions", "Workbook tasks + speaking/writing on Talking about directions", "Students can talking about directions using target vocab & grammar"],
            [18, "Unit 9: Weather – Lesson 1: Listening about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Listening about weather", "Students can listening about weather using target vocab & grammar"],
            [19, "Unit 9: Weather – Lesson 2: Talking about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Talking about weather", "Students can talking about weather using target vocab & grammar"],
            [20, "Unit 10: Travel – Lesson 1: Listening about travel", "Travel vocabulary, Intonation in series", "Future forms (going to)", "Workbook tasks + speaking/writing on Listening about travel", "Students can listening about travel using target vocab & grammar"],
            [21, "Unit 10: Travel – Lesson 2: Talking about travel", "Travel vocabulary, Intonation in series", "Future forms (going to)", "Workbook tasks + speaking/writing on Talking about travel", "Students can talking about travel using target vocab & grammar"],
            [22, "Unit 11: Technology – Lesson 1: Listening about technology", "Technology vocabulary, Word stress", "Can/can’t for ability", "Workbook tasks + speaking/writing on Listening about technology", "Students can listening about technology using target vocab & grammar"],
            [23, "Unit 11: Technology – Lesson 2: Talking about technology", "Technology vocabulary, Word stress", "Can/can’t for ability", "Workbook tasks + speaking/writing on Talking about technology", "Students can talking about technology using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_ic3 as $lesson) {
            $ic3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 4 ==========
        $ic4 = Subject::where('name', 'ICY Communication 4')->first();

        $lessons_ic4 = [
            [1, "Unit 1: Personal Information – Lesson 1: Listening about personal info", "Personal info vocabulary, Intonation in Wh-questions", "Wh-questions with be/do", "Workbook tasks + speaking/writing on Listening about personal info", "Students can listening about personal info using target vocab & grammar"],
            [2, "Unit 1: Personal Information – Lesson 2: Talking about personal info", "Personal info vocabulary, Intonation in Wh-questions", "Wh-questions with be/do", "Workbook tasks + speaking/writing on Talking about personal info", "Students can talking about personal info using target vocab & grammar"],
            [3, "Unit 2: Daily Activities – Lesson 1: Listening about daily activities", "Daily activity vocabulary, Sentence stress", "Present simple", "Workbook tasks + speaking/writing on Listening about daily activities", "Students can listening about daily activities using target vocab & grammar"],
            [4, "Unit 2: Daily Activities – Lesson 2: Talking about daily routines", "Daily activity vocabulary, Sentence stress", "Present simple", "Workbook tasks + speaking/writing on Talking about daily routines", "Students can talking about daily routines using target vocab & grammar"],
            [5, "Unit 3: Food and Drinks – Lesson 1: Listening about food", "Food & drinks vocabulary, Plural nouns", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Listening about food", "Students can listening about food using target vocab & grammar"],
            [6, "Unit 3: Food and Drinks – Lesson 2: Talking about food habits", "Food & drinks vocabulary, Plural nouns", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Talking about food habits", "Students can talking about food habits using target vocab & grammar"],
            [7, "Unit 4: Hobbies – Lesson 1: Listening about hobbies", "Hobbies vocabulary, Sentence stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Listening about hobbies", "Students can listening about hobbies using target vocab & grammar"],
            [8, "Unit 4: Hobbies – Lesson 2: Talking about hobbies", "Hobbies vocabulary, Sentence stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Talking about hobbies", "Students can talking about hobbies using target vocab & grammar"],
            [9, "Unit 5: Family and Friends – Lesson 1: Listening about family", "Family vocabulary, Word stress", "Possessive adjectives", "Workbook tasks + speaking/writing on Listening about family", "Students can listening about family using target vocab & grammar"],
            [10, "Unit 5: Family and Friends – Lesson 2: Talking about friends", "Friends vocabulary, Word stress", "Possessive adjectives", "Workbook tasks + speaking/writing on Talking about friends", "Students can talking about friends using target vocab & grammar"],
            [11, "Unit 6: Shopping – Lesson 1: Listening about shopping", "Shopping vocabulary, Sentence stress", "This/that/these/those", "Workbook tasks + speaking/writing on Listening about shopping", "Students can listening about shopping using target vocab & grammar"],
            [12, "Unit 6: Shopping – Lesson 2: Talking about clothes", "Shopping vocabulary, Sentence stress", "This/that/these/those", "Workbook tasks + speaking/writing on Talking about clothes", "Students can talking about clothes using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Sports – Lesson 1: Listening about sports", "Sports vocabulary, Intonation in Wh-questions", "Can/can’t for ability", "Workbook tasks + speaking/writing on Listening about sports", "Students can listening about sports using target vocab & grammar"],
            [15, "Unit 7: Sports – Lesson 2: Talking about sports", "Sports vocabulary, Intonation in Wh-questions", "Can/can’t for ability", "Workbook tasks + speaking/writing on Talking about sports", "Students can talking about sports using target vocab & grammar"],
            [16, "Unit 8: Places in Town – Lesson 1: Listening about places", "Places vocabulary, Sentence stress", "There is/are", "Workbook tasks + speaking/writing on Listening about places", "Students can listening about places using target vocab & grammar"],
            [17, "Unit 8: Places in Town – Lesson 2: Talking about places", "Places vocabulary, Sentence stress", "There is/are", "Workbook tasks + speaking/writing on Talking about places", "Students can talking about places using target vocab & grammar"],
            [18, "Unit 9: Travel – Lesson 1: Listening about travel", "Travel vocabulary, Word stress", "Going to future", "Workbook tasks + speaking/writing on Listening about travel", "Students can listening about travel using target vocab & grammar"],
            [19, "Unit 9: Travel – Lesson 2: Talking about travel plans", "Travel vocabulary, Word stress", "Going to future", "Workbook tasks + speaking/writing on Talking about travel plans", "Students can talking about travel plans using target vocab & grammar"],
            [20, "Unit 10: Weather – Lesson 1: Listening about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Listening about weather", "Students can listening about weather using target vocab & grammar"],
            [21, "Unit 10: Weather – Lesson 2: Talking about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Talking about weather", "Students can talking about weather using target vocab & grammar"],
            [22, "Unit 11: Technology – Lesson 1: Listening about technology", "Technology vocabulary, Word stress", "Have got/has got", "Workbook tasks + speaking/writing on Listening about technology", "Students can listening about technology using target vocab & grammar"],
            [23, "Unit 11: Technology – Lesson 2: Talking about technology", "Technology vocabulary, Word stress", "Have got/has got", "Workbook tasks + speaking/writing on Talking about technology", "Students can talking about technology using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_ic4 as $lesson) {
            $ic4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 5 ==========
        $ic5 = Subject::where('name', 'ICY Communication 5')->first();

        $lessons_ic5 = [
            [1, "Unit 1: Describing People – Lesson 1: Listening about appearance", "Appearance vocabulary, Intonation in Yes/No questions", "Yes/No questions with be", "Workbook tasks + speaking/writing on Listening about appearance", "Students can listening about appearance using target vocab & grammar"],
            [2, "Unit 1: Describing People – Lesson 2: Talking about people", "Appearance vocabulary, Intonation in Yes/No questions", "Yes/No questions with be", "Workbook tasks + speaking/writing on Talking about people", "Students can talking about people using target vocab & grammar"],
            [3, "Unit 2: Daily Routines – Lesson 1: Listening about routines", "Routine vocabulary, Word stress", "Present simple", "Workbook tasks + speaking/writing on Listening about routines", "Students can listening about routines using target vocab & grammar"],
            [4, "Unit 2: Daily Routines – Lesson 2: Talking about routines", "Routine vocabulary, Word stress", "Present simple", "Workbook tasks + speaking/writing on Talking about routines", "Students can talking about routines using target vocab & grammar"],
            [5, "Unit 3: Hobbies – Lesson 1: Listening about hobbies", "Hobbies vocabulary, Sentence stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Listening about hobbies", "Students can listening about hobbies using target vocab & grammar"],
            [6, "Unit 3: Hobbies – Lesson 2: Talking about hobbies", "Hobbies vocabulary, Sentence stress", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Talking about hobbies", "Students can talking about hobbies using target vocab & grammar"],
            [7, "Unit 4: Food and Drinks – Lesson 1: Listening about food", "Food vocabulary, Plural -s endings", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Listening about food", "Students can listening about food using target vocab & grammar"],
            [8, "Unit 4: Food and Drinks – Lesson 2: Talking about meals", "Food vocabulary, Plural -s endings", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Talking about meals", "Students can talking about meals using target vocab & grammar"],
            [9, "Unit 5: Family – Lesson 1: Listening about family members", "Family vocabulary, Possessive 's", "Possessive adjectives", "Workbook tasks + speaking/writing on Listening about family members", "Students can listening about family members using target vocab & grammar"],
            [10, "Unit 5: Family – Lesson 2: Talking about family", "Family vocabulary, Possessive 's", "Possessive adjectives", "Workbook tasks + speaking/writing on Talking about family", "Students can talking about family using target vocab & grammar"],
            [11, "Unit 6: Shopping – Lesson 1: Listening about shopping", "Shopping vocabulary, Sentence stress", "This/that/these/those", "Workbook tasks + speaking/writing on Listening about shopping", "Students can listening about shopping using target vocab & grammar"],
            [12, "Unit 6: Shopping – Lesson 2: Talking about clothes", "Shopping vocabulary, Sentence stress", "This/that/these/those", "Workbook tasks + speaking/writing on Talking about clothes", "Students can talking about clothes using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Sports – Lesson 1: Listening about sports", "Sports vocabulary, Intonation in Wh-questions", "Can/can’t for ability", "Workbook tasks + speaking/writing on Listening about sports", "Students can listening about sports using target vocab & grammar"],
            [15, "Unit 7: Sports – Lesson 2: Talking about sports", "Sports vocabulary, Intonation in Wh-questions", "Can/can’t for ability", "Workbook tasks + speaking/writing on Talking about sports", "Students can talking about sports using target vocab & grammar"],
            [16, "Unit 8: Places in Town – Lesson 1: Listening about places", "Places vocabulary, Sentence stress", "There is/are", "Workbook tasks + speaking/writing on Listening about places", "Students can listening about places using target vocab & grammar"],
            [17, "Unit 8: Places in Town – Lesson 2: Talking about places", "Places vocabulary, Sentence stress", "There is/are", "Workbook tasks + speaking/writing on Talking about places", "Students can talking about places using target vocab & grammar"],
            [18, "Unit 9: Travel – Lesson 1: Listening about travel", "Travel vocabulary, Word stress", "Going to future", "Workbook tasks + speaking/writing on Listening about travel", "Students can listening about travel using target vocab & grammar"],
            [19, "Unit 9: Travel – Lesson 2: Talking about travel plans", "Travel vocabulary, Word stress", "Going to future", "Workbook tasks + speaking/writing on Talking about travel plans", "Students can talking about travel plans using target vocab & grammar"],
            [20, "Unit 10: Weather – Lesson 1: Listening about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Listening about weather", "Students can listening about weather using target vocab & grammar"],
            [21, "Unit 10: Weather – Lesson 2: Talking about weather", "Weather vocabulary, Sentence stress", "Weather expressions", "Workbook tasks + speaking/writing on Talking about weather", "Students can talking about weather using target vocab & grammar"],
            [22, "Unit 11: Technology – Lesson 1: Listening about technology", "Technology vocabulary, Word stress", "Have got/has got", "Workbook tasks + speaking/writing on Listening about technology", "Students can listening about technology using target vocab & grammar"],
            [23, "Unit 11: Technology – Lesson 2: Talking about technology", "Technology vocabulary, Word stress", "Have got/has got", "Workbook tasks + speaking/writing on Talking about technology", "Students can talking about technology using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_ic5 as $lesson) {
            $ic5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 6 ==========
        $ic6 = Subject::where('name', 'ICY Communication 6')->first();

        $lessons_ic6 = [
            [1, "Unit 1: Daily Activities – Lesson 1: Listening about daily routines", "Daily routine vocabulary, Sentence stress", "Present simple", "Workbook tasks + speaking/writing on Listening about daily routines", "Students can listening about daily routines using target vocab & grammar"],
            [2, "Unit 1: Daily Activities – Lesson 2: Talking about daily routines", "Daily routine vocabulary, Sentence stress", "Present simple", "Workbook tasks + speaking/writing on Talking about daily routines", "Students can talking about daily routines using target vocab & grammar"],
            [3, "Unit 2: Food and Drinks – Lesson 1: Listening about food", "Food vocabulary, Plural -s endings", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Listening about food", "Students can listening about food using target vocab & grammar"],
            [4, "Unit 2: Food and Drinks – Lesson 2: Talking about meals", "Food vocabulary, Plural -s endings", "Countable/uncountable nouns", "Workbook tasks + speaking/writing on Talking about meals", "Students can talking about meals using target vocab & grammar"],
            [5, "Unit 3: Family and Friends – Lesson 1: Listening about family", "Family vocabulary, Possessive 's", "Possessive adjectives", "Workbook tasks + speaking/writing on Listening about family", "Students can listening about family using target vocab & grammar"],
            [6, "Unit 3: Family and Friends – Lesson 2: Talking about family", "Family vocabulary, Possessive 's", "Possessive adjectives", "Workbook tasks + speaking/writing on Talking about family", "Students can talking about family using target vocab & grammar"],
            [7, "Unit 4: Jobs – Lesson 1: Listening about jobs", "Jobs vocabulary, Syllable stress in words", "Have got/has got", "Workbook tasks + speaking/writing on Listening about jobs", "Students can listening about jobs using target vocab & grammar"],
            [8, "Unit 4: Jobs – Lesson 2: Talking about jobs", "Jobs vocabulary, Syllable stress in words", "Have got/has got", "Workbook tasks + speaking/writing on Talking about jobs", "Students can talking about jobs using target vocab & grammar"],
            [9, "Unit 5: Places – Lesson 1: Listening about places", "Places vocabulary, Intonation of Wh-questions", "There is/are", "Workbook tasks + speaking/writing on Listening about places", "Students can listening about places using target vocab & grammar"],
            [10, "Unit 5: Places – Lesson 2: Talking about places", "Places vocabulary, Intonation of Wh-questions", "There is/are", "Workbook tasks + speaking/writing on Talking about places", "Students can talking about places using target vocab & grammar"],
            [11, "Unit 6: Sports – Lesson 1: Listening about sports", "Sports vocabulary, Sentence stress", "Can/can’t for ability", "Workbook tasks + speaking/writing on Listening about sports", "Students can listening about sports using target vocab & grammar"],
            [12, "Unit 6: Sports – Lesson 2: Talking about sports", "Sports vocabulary, Sentence stress", "Can/can’t for ability", "Workbook tasks + speaking/writing on Talking about sports", "Students can talking about sports using target vocab & grammar"],
            [13, "Mid-term Test", "-", "-", "Written & oral test (Units 1–6)", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Hobbies – Lesson 1: Listening about hobbies", "Hobbies vocabulary, Intonation in Yes/No questions", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Listening about hobbies", "Students can listening about hobbies using target vocab & grammar"],
            [15, "Unit 7: Hobbies – Lesson 2: Talking about hobbies", "Hobbies vocabulary, Intonation in Yes/No questions", "Like/love/enjoy + V-ing", "Workbook tasks + speaking/writing on Talking about hobbies", "Students can talking about hobbies using target vocab & grammar"],
            [16, "Unit 8: Weather – Lesson 1: Listening about weather", "Weather vocabulary, Word stress", "Weather expressions", "Workbook tasks + speaking/writing on Listening about weather", "Students can listening about weather using target vocab & grammar"],
            [17, "Unit 8: Weather – Lesson 2: Talking about weather", "Weather vocabulary, Word stress", "Weather expressions", "Workbook tasks + speaking/writing on Talking about weather", "Students can talking about weather using target vocab & grammar"],
            [18, "Unit 9: Travel – Lesson 1: Listening about travel", "Travel vocabulary, Syllable stress in words", "Going to future", "Workbook tasks + speaking/writing on Listening about travel", "Students can listening about travel using target vocab & grammar"],
            [19, "Unit 9: Travel – Lesson 2: Talking about travel plans", "Travel vocabulary, Syllable stress in words", "Going to future", "Workbook tasks + speaking/writing on Talking about travel plans", "Students can talking about travel plans using target vocab & grammar"],
            [20, "Unit 10: Technology – Lesson 1: Listening about technology", "Technology vocabulary, Sentence stress", "Present continuous", "Workbook tasks + speaking/writing on Listening about technology", "Students can listening about technology using target vocab & grammar"],
            [21, "Unit 10: Technology – Lesson 2: Talking about technology", "Technology vocabulary, Sentence stress", "Present continuous", "Workbook tasks + speaking/writing on Talking about technology", "Students can talking about technology using target vocab & grammar"],
            [22, "Unit 11: Health – Lesson 1: Listening about health", "Health vocabulary, Contrastive stress", "Should/shouldn’t", "Workbook tasks + speaking/writing on Listening about health", "Students can listening about health using target vocab & grammar"],
            [23, "Unit 11: Health – Lesson 2: Talking about health", "Health vocabulary, Contrastive stress", "Should/shouldn’t", "Workbook tasks + speaking/writing on Talking about health", "Students can talking about health using target vocab & grammar"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–12)", "Students demonstrate mastery of Units 7–12"],
        ];

        foreach ($lessons_ic6 as $lesson) {
            $ic6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 7 ==========
        $subject = Subject::where('name', 'ICY Communication 7')->first();

        $lessons = [
            [1,  "Unit 1: Introductions – Lesson 1: Introduce yourself", "Nationalities, Jobs", "to be, a/an with jobs, wh- questions", "Write self-introduction", "Introduce self and others"],
            [2,  "Unit 1: Introductions – Lesson 2: Listening & Reading (Interview, From small town to global leader)", "Work roles, Leadership", "Present simple, Leadership vocabulary", "Summarize interview", "Understand interviews"],
            [3,  "Unit 1: Introductions – Lesson 3: Case Study – A job fair in Singapore, Writing: email", "Job fair, Recruitment", "Email format", "Draft a job application email", "Write formal email"],
            [4,  "Unit 2: Work and Leisure – Lesson 1: Discuss what people want from work", "Leisure activities, Staff needs", "Days, months, dates; Present simple; Frequency adverbs", "Make a work diary", "Talk about work and leisure"],
            [5,  "Unit 2: Work and Leisure – Lesson 2: Listening & Reading (Business diary, Interview)", "Business terms, Diary", "Present simple review", "Interview a peer", "Understand business texts"],
            [6,  "Unit 2: Work and Leisure – Lesson 3: Case Study – Hudson Design Inc., Writing: email", "Customer issues", "Email politeness forms", "Write staff complaint response", "Handle staff issues"],
            [7,  "Unit 3: Problems – Lesson 1: Talk about problems at work", "Problems, Solutions", "Adjectives too/enough, Present simple negatives, have, some/any", "Write problem-solution dialogue", "Discuss problems"],
            [8,  "Unit 3: Problems – Lesson 2: Listening & Reading (Change leadership, Call-centre interviews)", "Call-centre, Feedback", "Question forms", "Role-play a call-centre", "Understand interviews"],
            [9,  "Unit 3: Problems – Lesson 3: Case Study – High-Style Business Rentals, Writing: email", "Customer response", "Email structure", "Email reply practice", "Respond to customer feedback"],
            [10, "Working Across Cultures 1: Eating Out", "Eating out, Culture", "Cultural expressions", "Research cultural dining habits", "Understand cultural differences"],
            [11, "Revision A", "Review vocab Units 1–3", "Review Units 1–3 grammar", "Unit 1–3 practice test", "Review learning"],
            [12, "Unit 4: Travel – Lesson 1: Talk about business travel", "Travel, Hotel", "can/can’t, there is/are", "Describe business trip", "Talk about travel"],
            [13, "Unit 4: Travel – Lesson 2: Listening & Reading (Interview, Hilton Tokyo)", "Booking, Arrangements", "Requests, polite forms", "Booking dialogue", "Handle bookings"],
            [14, "Unit 4: Travel – Lesson 3: Case Study – Gustav Conference Centre, Writing: email", "Conference, Companies", "Formal writing", "Conference email writing", "Coordinate meetings"],
            [15, "Unit 5: Food and Entertaining – Lesson 1: Discuss food from different countries", "Food, Cuisines", "some/any, Countable & uncountable nouns", "Write food journal", "Discuss food & culture"],
            [16, "Unit 5: Food and Entertaining – Lesson 2: Listening & Reading (Fast-food chains, Interview)", "Fast-food, Global brands", "Food-related grammar", "Summarize fast-food article", "Understand articles"],
            [17, "Unit 5: Food and Entertaining – Lesson 3: Case Study – Which restaurant?, Writing: email", "Restaurant choices", "Decision-making phrases", "Choose restaurant activity", "Make decisions"],
            [18, "Unit 6: Buying and Selling – Lesson 1: Talk about buying different products", "Products, Services", "Past simple, Time references", "Make product description", "Describe products"],
            [19, "Unit 6: Buying and Selling – Lesson 2: Listening & Reading (Uniqlo, Interview)", "Success story, Management", "Comparisons", "Summarize Uniqlo text", "Understand success stories"],
            [20, "Unit 6: Buying and Selling – Lesson 3: Case Study – NP Innovations, Writing: email", "Innovation, Marketing", "Product descriptions", "Write innovation email", "Make innovation proposals"],
            [21, "Working Across Cultures 2: Communication Styles", "Communication styles", "Politeness strategies", "Compare communication styles", "Understand communication styles"],
            [22, "Revision B", "Review vocab Units 4–6", "Review Units 4–6 grammar", "Unit 4–6 practice test", "Review learning"],
            [23, "Mid-term Test", "Mid-term test vocabulary", "Grammar from Units 1–6", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Business theme)", "Presentation language", "Presentation connectors", "Prepare group presentation", "Present in English"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 8 ==========
        $subject = Subject::where('name', 'ICY Communication 8')->first();

        $lessons = [
            [1,  "Unit 7: People – Lesson 1: Talk about how you like to work", "Work preferences, People", "Past simple negatives & questions, Question forms", "Write about work style", "Describe work preferences"],
            [2,  "Unit 7: People – Lesson 2: Listening & Reading (Interview, Women at the top)", "Management, Leadership", "Describing people, Review grammar", "Summarize leadership text", "Understand leadership texts"],
            [3,  "Unit 7: People – Lesson 3: Case Study – Tell us about it!, Writing: reply to a problem message", "Problem messages", "Email reply structure", "Draft reply to problem email", "Reply to formal messages"],
            [4,  "Unit 8: Advertising – Lesson 1: Do an advertising quiz", "Advertising, Markets", "Comparatives, Superlatives, much/a lot/a little/a bit", "Do advertising survey", "Understand ads"],
            [5,  "Unit 8: Advertising – Lesson 2: Listening & Reading (Volkswagen ad, Interview)", "Comparatives, Superlatives", "Advertising grammar", "Summarize ad campaign", "Analyze campaigns"],
            [6,  "Unit 8: Advertising – Lesson 3: Case Study – Excelsior Chocolate Products, Writing: product launch plan", "Product launch", "Product launch writing", "Write product launch email", "Plan product launches"],
            [7,  "Unit 9: Companies – Lesson 1: Do a companies quiz", "Companies, Leadership", "Present continuous, Present simple", "Company quiz", "Discuss companies"],
            [8,  "Unit 9: Companies – Lesson 2: Listening & Reading (Change leadership, New markets)", "New markets, Industries", "Describing companies", "Summarize new markets text", "Understand new markets"],
            [9,  "Unit 9: Companies – Lesson 3: Case Study – Presenting your company, Writing: company profile", "Company profile", "Presentation grammar", "Prepare company profile", "Present a company profile"],
            [10, "Working Across Cultures 3: Doing Business Internationally", "International business, Cultures", "Cross-cultural communication", "Research international business", "Understand international business"],
            [11, "Revision C", "Review vocab Units 7–9", "Review Units 7–9 grammar", "Practice test Units 7–9", "Review Units 7–9"],
            [12, "Unit 10: Communication – Lesson 1: Do a communications quiz", "Communication, Social media", "Future with will", "Write communication diary", "Communicate future plans"],
            [13, "Unit 10: Communication – Lesson 2: Listening & Reading (Interview, Facebook article)", "Future plans", "Arrangements", "Future plan writing", "Understand social media articles"],
            [14, "Unit 10: Communication – Lesson 3: Case Study – Blakelock Engineering, Writing: email", "Arrangements, Company issues", "Formal writing", "Email to manager", "Handle arrangements"],
            [15, "Unit 11: Cultures – Lesson 1: Look at tips for doing business in another country", "Cultural mistakes, Differences", "should/shouldn’t, could/would", "List cultural mistakes", "Identify cultural mistakes"],
            [16, "Unit 11: Cultures – Lesson 2: Listening & Reading (Cultural mistakes, Lessons in cultural difference)", "Company cultures", "Cultural expressions", "Write cultural reflection", "Understand cultural lessons"],
            [17, "Unit 11: Cultures – Lesson 3: Case Study – The wind of change, Writing: action minutes", "Change management", "Action minutes", "Minutes of meeting", "Assess company change"],
            [18, "Unit 12: Jobs – Lesson 1: Discuss jobs", "Jobs, Networking", "Present perfect, Past simple vs present perfect", "Describe skills", "Discuss jobs"],
            [19, "Unit 12: Jobs – Lesson 2: Listening & Reading (Interview, Networking profile)", "Skills, Abilities", "Describing skills", "Summarize job profile", "Understand networking profiles"],
            [20, "Unit 12: Jobs – Lesson 3: Case Study – Nelson & Harper Inc., Writing: letter", "Job interviews, Letters", "Letter writing structures", "Write job application letter", "Prepare for job interviews"],
            [21, "Working Across Cultures 4: Team Working", "Teamwork, Collaboration", "Teamwork grammar", "Group teamwork activity", "Collaborate in teamwork"],
            [22, "Revision D", "Review vocab Units 10–12", "Review Units 10–12 grammar", "Practice test Units 10–12", "Review Units 10–12"],
            [23, "Mid-term Test", "Mid-term vocabulary", "Grammar from Units 7–12", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Company theme)", "Presentation language", "Presentation connectors", "Prepare group presentation", "Present project"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 9 ==========
        $subject = Subject::where('name', 'ICY Communication 9')->first();

        $lessons = [
            [1,  "Unit 1: Careers – Lesson 1: Talk about your career plan", "Career, Jobs", "Modals 1: ability, requests, offers", "Write about career plan", "Discuss career plans"],
            [2,  "Unit 1: Careers – Lesson 2: Listening & Reading (Interview with Finance Director, Facebook profile)", "Finance, Job prospects", "Career grammar", "Summarize Facebook text", "Understand interviews"],
            [3,  "Unit 1: Careers – Lesson 3: Case Study – YouJuice: Job candidate decision, Writing: email", "Recruitment, Emails", "Email writing format", "Write job application email", "Write job-related emails"],
            [4,  "Unit 2: Companies – Lesson 1: Talk about companies", "Companies, CEOs", "Present simple & present continuous", "Company research", "Describe companies"],
            [5,  "Unit 2: Companies – Lesson 2: Listening & Reading (CEO search, Best companies)", "Corporate culture, Industries", "Describing companies", "Summarize article", "Understand articles"],
            [6,  "Unit 2: Companies – Lesson 3: Case Study – Dino Conti Ice Cream: Investment decision, Writing: proposal", "Proposal terms", "Proposal writing structures", "Write investment proposal", "Write proposals"],
            [7,  "Unit 3: Selling – Lesson 1: Talk about shopping habits", "Shopping, Sales", "Modals 2: must, need to, have to, should", "Write shopping diary", "Discuss shopping habits"],
            [8,  "Unit 3: Selling – Lesson 2: Listening & Reading (Interview with Marketing Director, Women in sales)", "Marketing, Surveys", "Sales-related grammar", "Summarize sales survey", "Understand marketing surveys"],
            [9,  "Unit 3: Selling – Lesson 3: Case Study – Partnership agreement, Writing: letter", "Partnership, Letters", "Letter writing forms", "Write partnership letter", "Write partnership letters"],
            [10, "Working Across Cultures 1: Saying 'No' Politely", "Cultural politeness", "Politeness expressions", "Research politeness", "Understand politeness"],
            [11, "Revision A", "Review vocab Units 1–3", "Review Units 1–3 grammar", "Practice test Units 1–3", "Review Units 1–3"],
            [12, "Unit 4: Great Ideas – Lesson 1: Discuss what makes a great idea", "Ideas, Creativity", "Verb & noun combinations", "Describe a great idea", "Discuss ideas"],
            [13, "Unit 4: Great Ideas – Lesson 2: Listening & Reading (Researcher, Translators, Safer cycling, Going for gold)", "Research, Innovation", "Past simple & past continuous", "Summarize research articles", "Understand research texts"],
            [14, "Unit 4: Great Ideas – Lesson 3: Case Study – New attraction idea, Writing: report", "Attractions, Reports", "Report writing grammar", "Write attraction report", "Write reports"],
            [15, "Unit 5: Stress – Lesson 1: Discuss stressful situations and activities", "Stress, Workplace", "Past simple & present perfect", "List stressful activities", "Discuss stress"],
            [16, "Unit 5: Stress – Lesson 2: Listening & Reading (Interview with Director, Over half stressed owners)", "Health, Consultancy", "Stress vocabulary", "Summarize stress article", "Understand stress articles"],
            [17, "Unit 5: Stress – Lesson 3: Case Study – Davies-Miller Advertising, Writing: report", "Advertising, Stress reduction", "Report grammar", "Write stress report", "Write company reports"],
            [18, "Unit 6: Entertaining – Lesson 1: Discuss corporate entertaining", "Entertainment, Events", "Multiword verbs", "Plan a corporate event", "Discuss entertaining"],
            [19, "Unit 6: Entertaining – Lesson 2: Listening & Reading (CEO interview, Entertainment experts)", "Corporate, Hospitality", "Present continuous", "Summarize interviews", "Understand CEO interviews"],
            [20, "Unit 6: Entertaining – Lesson 3: Case Study – Organising a conference, Writing: email", "Conferences, Emails", "Email format", "Write conference email", "Write emails"],
            [21, "Working Across Cultures 2: Doing Business Internationally", "International business", "International communication grammar", "Compare business practices", "Understand business cultures"],
            [22, "Revision B", "Review vocab Units 4–6", "Review Units 4–6 grammar", "Practice test Units 4–6", "Review Units 4–6"],
            [23, "Mid-term Test", "Mid-term vocabulary", "Grammar from Units 1–6", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Business Idea theme)", "Presentation language", "Presentation connectors", "Prepare presentation", "Present in English"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY COMMUNICATION 10 ==========
        $subject = Subject::where('name', 'ICY Communication 10')->first();

        $lessons = [
            [1,  "Unit 7: New Business – Lesson 1: Discuss new businesses and business sectors", "Business, Sectors", "Economic terms, Time clauses", "Write about new business idea", "Discuss new businesses"],
            [2,  "Unit 7: New Business – Lesson 2: Listening & Reading (Interviews with CEOs, Internet whiz-kid, Exports)", "CEOs, Exports", "Business grammar", "Summarize CEO text", "Understand CEO interviews"],
            [3,  "Unit 7: New Business – Lesson 3: Case Study – Taka Shimizu Cycles: Factory location decision, Writing: email", "Factories, Emails", "Email writing format", "Write factory location email", "Write business emails"],
            [4,  "Unit 8: Marketing – Lesson 1: Talk about marketing mix and campaigns", "Marketing mix, Campaigns", "Word partnerships, Questions", "Do marketing quiz", "Discuss marketing mix"],
            [5,  "Unit 8: Marketing – Lesson 2: Listening & Reading (Interview with Marketing Manager, Adidas targets China)", "Adidas, Global markets", "Marketing language", "Summarize Adidas article", "Understand global marketing"],
            [6,  "Unit 8: Marketing – Lesson 3: Case Study – Wincote International: Outdoor sales plan, Writing: email", "Plans, Emails", "Email structures", "Write marketing email", "Write marketing emails"],
            [7,  "Unit 9: Planning – Lesson 1: Discuss how and when to plan", "Planning, Strategies", "Future plans, Planning grammar", "Plan a project", "Discuss planning"],
            [8,  "Unit 9: Planning – Lesson 2: Listening & Reading (Interview with consultant, When there’s no Plan A)", "Consultants, Future plans", "Future tenses", "Summarize planning text", "Understand planning texts"],
            [9,  "Unit 9: Planning – Lesson 3: Case Study – European Press and Media: Magazine issue plan, Writing: letter", "Magazine issues, Letters", "Letter writing forms", "Write magazine letter", "Write letters"],
            [10, "Working Across Cultures 3: International Conference Calls", "Conference calls, Cultures", "Conference communication", "Research conference calls", "Handle conference calls"],
            [11, "Revision C", "Review vocab Units 7–9", "Review Units 7–9 grammar", "Practice test Units 7–9", "Review Units 7–9"],
            [12, "Unit 10: Managing People – Lesson 1: Discuss qualities of a good manager", "Managers, Leadership", "Verbs & prepositions, Reported speech", "List manager qualities", "Discuss management"],
            [13, "Unit 10: Managing People – Lesson 2: Listening & Reading (Management book, Share the power)", "Management books, Power", "Leadership grammar", "Summarize leadership text", "Understand leadership texts"],
            [14, "Unit 10: Managing People – Lesson 3: Case Study – Ashley Cooper Search: Improve staff relations, Writing: report", "Reports, Staff relations", "Report grammar", "Write staff relations report", "Write staff reports"],
            [15, "Unit 11: Conflict – Lesson 1: Do a quiz on managing conflict", "Conflict, Resolution", "Conditionals, Word-building", "Conflict quiz", "Understand conflict"],
            [16, "Unit 11: Conflict – Lesson 2: Listening & Reading (Interview with expert, Conflict intervention)", "Dispute experts, Interventions", "Conflict grammar", "Summarize conflict article", "Analyze conflict texts"],
            [17, "Unit 11: Conflict – Lesson 3: Case Study – Herman & Corrie Teas: Buy-out decision, Writing: letter", "Buy-out offers, Letters", "Letter grammar", "Write buy-out letter", "Write conflict letters"],
            [18, "Unit 12: Products – Lesson 1: Discuss products", "Products, Innovation", "Passives, Product descriptions", "Describe product", "Discuss products"],
            [19, "Unit 12: Products – Lesson 2: Listening & Reading (Editor interview, Innovation path)", "Editors, Competitions", "Innovation grammar", "Summarize innovation article", "Understand innovation texts"],
            [20, "Unit 12: Products – Lesson 3: Case Study – George Marshall Awards: Product innovation, Writing: report", "Reports, Presentations", "Report structures", "Write product report", "Write product reports"],
            [21, "Working Across Cultures 4: Preparing to Do Business Internationally", "International business", "International grammar", "Compare international practices", "Do international business"],
            [22, "Revision D", "Review vocab Units 10–12", "Review Units 10–12 grammar", "Practice test Units 10–12", "Review Units 10–12"],
            [23, "Mid-term Test", "Mid-term vocabulary", "Grammar from Units 7–12", "Mid-term exam", "Assess progress"],
            [24, "Project Work: Group Presentation (Business/Marketing theme)", "Presentation language", "Presentation connectors", "Prepare presentation", "Present projects"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 1 ==========
        $ielts1 = Subject::where('name', 'ICY IELTS 1')->first();

        $lessons_ielts1 = [
            [1, 'Unit 1: Daily Life – Lesson 1: Lead-in & Vocabulary', 'Daily routines, Present simple verbs, Adverbs of frequency', 'Present simple, Adverbs of frequency', 'Create a vocabulary mindmap + write 5 original sentences', 'Students can activate prior knowledge, recognize and use new vocabulary in context, and express simple ideas with target words.'],
            [2, 'Unit 1: Daily Life – Lesson 2: Grammar & Practice', 'Daily routines, Present simple verbs, Adverbs of frequency', 'Present simple, Adverbs of frequency', 'Complete grammar drills + compose a short dialogue', 'Students can apply target grammar rules in controlled and semi-controlled practice, and self-correct common mistakes.'],
            [3, 'Unit 1: Daily Life – Lesson 3: Reading & Listening', 'Daily routines, Present simple verbs, Adverbs of frequency', 'Present simple, Adverbs of frequency', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from short academic and everyday texts, improve note-taking, and identify keywords.'],
            [4, 'Unit 1: Daily Life – Lesson 4: Speaking & Writing', 'Daily routines, Present simple verbs, Adverbs of frequency', 'Present simple, Adverbs of frequency', 'Prepare and deliver a 2-min oral presentation + write a short essay', 'Students can produce connected speech and structured writing with appropriate vocabulary and grammar for familiar IELTS topics.'],
            [5, 'Unit 2: House and Home – Lesson 1: Lead-in & Vocabulary', 'Home vocabulary, Furniture, Prepositions of place', 'There is/are, Prepositions of place', 'Create a vocabulary mindmap + write 5 original sentences', 'Students can activate prior knowledge, recognize and use new vocabulary in context, and express simple ideas with target words.'],
            [6, 'Unit 2: House and Home – Lesson 2: Grammar & Practice', 'Home vocabulary, Furniture, Prepositions of place', 'There is/are, Prepositions of place', 'Complete grammar drills + compose a short dialogue', 'Students can apply target grammar rules in controlled and semi-controlled practice, and self-correct common mistakes.'],
            [7, 'Unit 2: House and Home – Lesson 3: Reading & Listening', 'Home vocabulary, Furniture, Prepositions of place', 'There is/are, Prepositions of place', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from short academic and everyday texts, improve note-taking, and identify keywords.'],
            [8, 'Unit 2: House and Home – Lesson 4: Speaking & Writing', 'Home vocabulary, Furniture, Prepositions of place', 'There is/are, Prepositions of place', 'Prepare and deliver a 2-min oral presentation + write a short essay', 'Students can produce connected speech and structured writing with appropriate vocabulary and grammar for familiar IELTS topics.'],
            [9, 'Unit 3: Hobbies, Leisure and Entertainment – Lesson 1: Lead-in & Vocabulary', 'Leisure activities, Entertainment vocabulary', 'Like + V-ing, Present continuous', 'Create a vocabulary mindmap + write 5 original sentences', 'Students can activate prior knowledge, recognize and use new vocabulary in context, and express simple ideas with target words.'],
            [10, 'Unit 3: Hobbies, Leisure and Entertainment – Lesson 2: Grammar & Practice', 'Leisure activities, Entertainment vocabulary', 'Like + V-ing, Present continuous', 'Complete grammar drills + compose a short dialogue', 'Students can apply target grammar rules in controlled and semi-controlled practice, and self-correct common mistakes.'],
            [11, 'Unit 3: Hobbies, Leisure and Entertainment – Lesson 3: Reading & Listening', 'Leisure activities, Entertainment vocabulary', 'Like + V-ing, Present continuous', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from short academic and everyday texts, improve note-taking, and identify keywords.'],
            [12, 'Unit 3: Hobbies, Leisure and Entertainment – Lesson 4: Speaking & Writing', 'Leisure activities, Entertainment vocabulary', 'Like + V-ing, Present continuous', 'Prepare and deliver a 2-min oral presentation + write a short essay', 'Students can produce connected speech and structured writing with appropriate vocabulary and grammar for familiar IELTS topics.'],
            [13, 'Mid-term Test', '-', '-', 'Written & oral test (Units 1–3)', 'Students can demonstrate integrated mastery of vocabulary, grammar, reading, listening, speaking, and writing skills from Units 1–3.'],
            [14, 'Unit 4: Travel and Holidays – Lesson 1: Lead-in & Vocabulary', 'Travel vocabulary, Holiday expressions', 'Past simple, Future with will/going to', 'Create a vocabulary mindmap + write 5 original sentences', 'Students can activate prior knowledge, recognize and use new vocabulary in context, and express simple ideas with target words.'],
            [15, 'Unit 4: Travel and Holidays – Lesson 2: Grammar & Practice', 'Travel vocabulary, Holiday expressions', 'Past simple, Future with will/going to', 'Complete grammar drills + compose a short dialogue', 'Students can apply target grammar rules in controlled and semi-controlled practice, and self-correct common mistakes.'],
            [16, 'Unit 4: Travel and Holidays – Lesson 3: Reading & Listening', 'Travel vocabulary, Holiday expressions', 'Past simple, Future with will/going to', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from short academic and everyday texts, improve note-taking, and identify keywords.'],
            [17, 'Unit 4: Travel and Holidays – Lesson 4: Speaking & Writing', 'Travel vocabulary, Holiday expressions', 'Past simple, Future with will/going to', 'Prepare and deliver a 2-min oral presentation + write a short essay', 'Students can produce connected speech and structured writing with appropriate vocabulary and grammar for familiar IELTS topics.'],
            [18, 'Unit 5: Food – Lesson 1: Lead-in & Vocabulary', 'Food vocabulary, Countable/uncountable nouns', 'Much/many/some/any, Quantifiers', 'Create a vocabulary mindmap + write 5 original sentences', 'Students can activate prior knowledge, recognize and use new vocabulary in context, and express simple ideas with target words.'],
            [19, 'Unit 5: Food – Lesson 2: Grammar & Practice', 'Food vocabulary, Countable/uncountable nouns', 'Much/many/some/any, Quantifiers', 'Complete grammar drills + compose a short dialogue', 'Students can apply target grammar rules in controlled and semi-controlled practice, and self-correct common mistakes.'],
            [20, 'Project-based Learning 1', 'Integrated vocabulary', 'Integrated grammar', 'Group poster/project about Units 1–3', 'Students can collaborate in groups to design posters, conduct peer teaching, and present integrated knowledge from Units 1–3.'],
            [21, 'Unit 5: Food – Lesson 3: Reading & Listening', 'Food vocabulary, Countable/uncountable nouns', 'Much/many/some/any, Quantifiers', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from short academic and everyday texts, improve note-taking, and identify keywords.'],
            [22, 'Project-based Learning 2', 'Integrated vocabulary', 'Integrated grammar', 'Group presentation about Units 4–5', 'Students can develop problem-solving, presentation, and public speaking skills by synthesizing knowledge from Units 4–5.'],
            [23, 'Unit 5: Food – Lesson 4: Speaking & Writing', 'Food vocabulary, Countable/uncountable nouns', 'Much/many/some/any, Quantifiers', 'Prepare and deliver a 2-min oral presentation + write a short essay', 'Students can produce connected speech and structured writing with appropriate vocabulary and grammar for familiar IELTS topics.'],
            [24, 'Final Test', '-', '-', 'Written & oral test (Units 4–5)', 'Students can demonstrate readiness for higher-level IELTS practice by integrating all 4 skills and grammar/vocabulary knowledge from Units 4–5.'],
        ];

        foreach ($lessons_ielts1 as $lesson) {
            $ielts1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 2 ==========
        $ielts2 = Subject::where('name', 'ICY IELTS 2')->first();

        $lessons_ielts2 = [
            [1, 'Unit 6: Transport and Places in Town – Lesson 1: Lead-in & Vocabulary', 'Transport vocabulary, Town places vocabulary', 'Prepositions of place, Directions', 'Create a vocabulary list + example sentences', 'Students can identify, recall and use new vocabulary related to the topic in basic conversations.'],
            [2, 'Unit 6: Transport and Places in Town – Lesson 2: Grammar & Practice', 'Transport vocabulary, Town places vocabulary', 'Prepositions of place, Directions', 'Complete grammar exercises + write 5 original sentences', 'Students can apply target grammar rules in speaking and writing tasks with accuracy.'],
            [3, 'Unit 6: Transport and Places in Town – Lesson 3: Reading & Listening', 'Transport vocabulary, Town places vocabulary', 'Prepositions of place, Directions', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from academic texts and authentic listening materials, and take notes effectively.'],
            [4, 'Unit 6: Transport and Places in Town – Lesson 4: Speaking & Writing', 'Transport vocabulary, Town places vocabulary', 'Prepositions of place, Directions', 'Prepare short oral presentation + write a short essay', 'Students can produce coherent spoken and written texts, expressing opinions and providing supporting details.'],
            [5, 'Unit 7: Jobs, Work and Study – Lesson 1: Lead-in & Vocabulary', 'Jobs vocabulary, Workplace expressions', 'Present perfect, Passive voice', 'Create a vocabulary list + example sentences', 'Students can identify, recall and use new vocabulary related to the topic in basic conversations.'],
            [6, 'Unit 7: Jobs, Work and Study – Lesson 2: Grammar & Practice', 'Jobs vocabulary, Workplace expressions', 'Present perfect, Passive voice', 'Complete grammar exercises + write 5 original sentences', 'Students can apply target grammar rules in speaking and writing tasks with accuracy.'],
            [7, 'Unit 7: Jobs, Work and Study – Lesson 3: Reading & Listening', 'Jobs vocabulary, Workplace expressions', 'Present perfect, Passive voice', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from academic texts and authentic listening materials, and take notes effectively.'],
            [8, 'Unit 7: Jobs, Work and Study – Lesson 4: Speaking & Writing', 'Jobs vocabulary, Workplace expressions', 'Present perfect, Passive voice', 'Prepare short oral presentation + write a short essay', 'Students can produce coherent spoken and written texts, expressing opinions and providing supporting details.'],
            [9, 'Unit 8: Food and Healthy Living – Lesson 1: Lead-in & Vocabulary', 'Food vocabulary, Health expressions', 'Quantifiers, Countable/uncountable nouns', 'Create a vocabulary list + example sentences', 'Students can identify, recall and use new vocabulary related to the topic in basic conversations.'],
            [10, 'Unit 8: Food and Healthy Living – Lesson 2: Grammar & Practice', 'Food vocabulary, Health expressions', 'Quantifiers, Countable/uncountable nouns', 'Complete grammar exercises + write 5 original sentences', 'Students can apply target grammar rules in speaking and writing tasks with accuracy.'],
            [11, 'Unit 8: Food and Healthy Living – Lesson 3: Reading & Listening', 'Food vocabulary, Health expressions', 'Quantifiers, Countable/uncountable nouns', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from academic texts and authentic listening materials, and take notes effectively.'],
            [12, 'Unit 8: Food and Healthy Living – Lesson 4: Speaking & Writing', 'Food vocabulary, Health expressions', 'Quantifiers, Countable/uncountable nouns', 'Prepare short oral presentation + write a short essay', 'Students can produce coherent spoken and written texts, expressing opinions and providing supporting details.'],
            [13, 'Mid-term Test', '-', '-', 'Written & oral test (Units 6–8)', 'Students demonstrate mastery of Units 6–8'],
            [14, 'Unit 9: Environment and Nature – Lesson 1: Lead-in & Vocabulary', 'Environment vocabulary, Nature expressions', 'Modals of obligation, Zero conditional', 'Create a vocabulary list + example sentences', 'Students can identify, recall and use new vocabulary related to the topic in basic conversations.'],
            [15, 'Unit 9: Environment and Nature – Lesson 2: Grammar & Practice', 'Environment vocabulary, Nature expressions', 'Modals of obligation, Zero conditional', 'Complete grammar exercises + write 5 original sentences', 'Students can apply target grammar rules in speaking and writing tasks with accuracy.'],
            [16, 'Unit 9: Environment and Nature – Lesson 3: Reading & Listening', 'Environment vocabulary, Nature expressions', 'Modals of obligation, Zero conditional', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from academic texts and authentic listening materials, and take notes effectively.'],
            [17, 'Unit 9: Environment and Nature – Lesson 4: Speaking & Writing', 'Environment vocabulary, Nature expressions', 'Modals of obligation, Zero conditional', 'Prepare short oral presentation + write a short essay', 'Students can produce coherent spoken and written texts, expressing opinions and providing supporting details.'],
            [18, 'Unit 10: Education and Learning – Lesson 1: Lead-in & Vocabulary', 'School and education vocabulary', 'Gerunds and infinitives', 'Create a vocabulary list + example sentences', 'Students can identify, recall and use new vocabulary related to the topic in basic conversations.'],
            [19, 'Unit 10: Education and Learning – Lesson 2: Grammar & Practice', 'School and education vocabulary', 'Gerunds and infinitives', 'Complete grammar exercises + write 5 original sentences', 'Students can apply target grammar rules in speaking and writing tasks with accuracy.'],
            [20, 'Unit 10: Education and Learning – Lesson 3: Reading & Listening', 'School and education vocabulary', 'Gerunds and infinitives', 'Read passage + answer comprehension questions + listening gap-fill', 'Students can understand main ideas and details from academic texts and authentic listening materials, and take notes effectively.'],
            [21, 'Unit 10: Education and Learning – Lesson 4: Speaking & Writing', 'School and education vocabulary', 'Gerunds and infinitives', 'Prepare short oral presentation + write a short essay', 'Students can produce coherent spoken and written texts, expressing opinions and providing supporting details.'],
            [22, 'Project-based Learning: IELTS Poster Project', 'Integrated review vocabulary', 'Integrated review grammar', 'Create and present a project poster', 'Students can apply knowledge creatively in a real-life context'],
            [23, 'Review & Consolidation', 'Review vocabulary from Units 6–10', 'Review grammar from Units 6–10', 'Complete group quiz + discussion', 'Students consolidate knowledge and skills from previous units'],
            [24, 'Final Test', '-', '-', 'Written & oral test (Units 6–10)', 'Students demonstrate mastery of Units 6–10'],
        ];

        foreach ($lessons_ielts2 as $lesson) {
            $ielts2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 3 ==========
        $ielts3 = Subject::where('name', 'ICY IELTS 3')->first();

        $lessons_ielts3 = [
            [1, 'Unit 1: Relationships – Reading', 'Family, Friendship, Relationships', 'Present simple & continuous, Comparatives, Questions', 'Read IELTS-style passage + comprehension + summarize', 'Students can skim/scan IELTS texts and identify details.'],
            [2, 'Unit 1: Relationships – Writing', 'Family, Friendship, Relationships', 'Present simple & continuous, Comparatives, Questions', 'Write IELTS Task 1/2 essay (150–250 words)', 'Students can produce coherent IELTS essays with correct grammar.'],
            [3, 'Unit 1: Relationships – Listening', 'Family, Friendship, Relationships', 'Present simple & continuous, Comparatives, Questions', 'IELTS audio + gap-fill + note-taking', 'Students can understand gist and detail in IELTS listening.'],
            [4, 'Unit 1: Relationships – Speaking', 'Family, Friendship, Relationships', 'Present simple & continuous, Comparatives, Questions', 'Discussion + IELTS Speaking Part 1/2/3 practice', 'Students can respond fluently and accurately in IELTS Speaking.'],
            [5, 'Review 1: Relationships', 'Vocabulary from Unit 1', 'Grammar from Unit 1', 'Vocabulary & grammar quiz + integrated IELTS skills practice', 'Students can consolidate vocabulary, grammar, and skills from the unit.'],
            [6, 'Unit 2: Places and Buildings – Reading', 'Buildings, City places, Directions', 'There is/are, Prepositions of place, Past simple', 'Read IELTS-style passage + comprehension + summarize', 'Students can skim/scan IELTS texts and identify details.'],
            [7, 'Unit 2: Places and Buildings – Writing', 'Buildings, City places, Directions', 'There is/are, Prepositions of place, Past simple', 'Write IELTS Task 1/2 essay (150–250 words)', 'Students can produce coherent IELTS essays with correct grammar.'],
            [8, 'Unit 2: Places and Buildings – Listening', 'Buildings, City places, Directions', 'There is/are, Prepositions of place, Past simple', 'IELTS audio + gap-fill + note-taking', 'Students can understand gist and detail in IELTS listening.'],
            [9, 'Unit 2: Places and Buildings – Speaking', 'Buildings, City places, Directions', 'There is/are, Prepositions of place, Past simple', 'Discussion + IELTS Speaking Part 1/2/3 practice', 'Students can respond fluently and accurately in IELTS Speaking.'],
            [10, 'Review 2: Places and Buildings', 'Vocabulary from Unit 2', 'Grammar from Unit 2', 'Vocabulary & grammar quiz + integrated IELTS skills practice', 'Students can consolidate vocabulary, grammar, and skills from the unit.'],
            [11, 'Unit 3: Education and Employment – Reading', 'Jobs, Employment, Education systems', 'Present perfect, Future tenses, Passive voice', 'Read IELTS-style passage + comprehension + summarize', 'Students can skim/scan IELTS texts and identify details.'],
            [12, 'Mid-term Test', '-', '-', 'Written & oral test (Units 1–2)', 'Students can integrate skills and knowledge from Units 1–2 in test format.'],
            [13, 'Unit 3: Education and Employment – Writing', 'Jobs, Employment, Education systems', 'Present perfect, Future tenses, Passive voice', 'Write IELTS Task 1/2 essay (150–250 words)', 'Students can produce coherent IELTS essays with correct grammar.'],
            [14, 'Unit 3: Education and Employment – Listening', 'Jobs, Employment, Education systems', 'Present perfect, Future tenses, Passive voice', 'IELTS audio + gap-fill + note-taking', 'Students can understand gist and detail in IELTS listening.'],
            [15, 'Unit 3: Education and Employment – Speaking', 'Jobs, Employment, Education systems', 'Present perfect, Future tenses, Passive voice', 'Discussion + IELTS Speaking Part 1/2/3 practice', 'Students can respond fluently and accurately in IELTS Speaking.'],
            [16, 'Review 3: Education and Employment', 'Vocabulary from Unit 3', 'Grammar from Unit 3', 'Vocabulary & grammar quiz + integrated IELTS skills practice', 'Students can consolidate vocabulary, grammar, and skills from the unit.'],
            [17, 'Unit 4: Food and Drink – Reading', 'Food vocabulary, Eating habits, Restaurant language', 'Countable/uncountable nouns, Quantifiers, Modal verbs', 'Read IELTS-style passage + comprehension + summarize', 'Students can skim/scan IELTS texts and identify details.'],
            [18, 'Unit 4: Food and Drink – Writing', 'Food vocabulary, Eating habits, Restaurant language', 'Countable/uncountable nouns, Quantifiers, Modal verbs', 'Write IELTS Task 1/2 essay (150–250 words)', 'Students can produce coherent IELTS essays with correct grammar.'],
            [19, 'Unit 4: Food and Drink – Listening', 'Food vocabulary, Eating habits, Restaurant language', 'Countable/uncountable nouns, Quantifiers, Modal verbs', 'IELTS audio + gap-fill + note-taking', 'Students can understand gist and detail in IELTS listening.'],
            [20, 'Unit 4: Food and Drink – Speaking', 'Food vocabulary, Eating habits, Restaurant language', 'Countable/uncountable nouns, Quantifiers, Modal verbs', 'Discussion + IELTS Speaking Part 1/2/3 practice', 'Students can respond fluently and accurately in IELTS Speaking.'],
            [21, 'Review 4: Food and Drink', 'Vocabulary from Unit 4', 'Grammar from Unit 4', 'Vocabulary & grammar quiz + integrated IELTS skills practice', 'Students can consolidate vocabulary, grammar, and skills from the unit.'],
            [22, 'IELTS Integrated Practice 1', 'Review Units 1–2', 'Grammar consolidation', 'Simulated IELTS test practice (mixed skills)', 'Students can apply integrated IELTS skills in test-like conditions.'],
            [23, 'IELTS Integrated Practice 2', 'Review Units 3–4', 'Grammar consolidation', 'Simulated IELTS test practice (mixed skills)', 'Students can apply integrated IELTS skills in test-like conditions.'],
            [24, 'Final Test', '-', '-', 'Written & oral test (Units 3–4)', 'Students can integrate skills and knowledge from Units 3–4 in test format.'],
        ];

        foreach ($lessons_ielts3 as $lesson) {
            $ielts3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 4 ==========
        $ielts4 = Subject::where('name', 'ICY IELTS 4')->first();

        $lessons_ielts4 = [
            [1, "Unit 5: Consumerism – Reading", "Shopping, Consumer habits, Advertising vocabulary", "Comparatives, Superlatives, Quantifiers", "Read IELTS-style passage + comprehension questions + vocabulary tasks", "Students can identify gist, detail, and inference in reading tasks"],
            [2, "Unit 5: Consumerism – Writing", "Shopping, Consumer habits, Advertising vocabulary", "Comparatives, Superlatives, Quantifiers", "Write IELTS Task 1 or 2 essay (150–250 words) + peer review", "Students can produce structured, coherent IELTS essays with appropriate grammar and vocabulary"],
            [3, "Unit 5: Consumerism – Listening", "Shopping, Consumer habits, Advertising vocabulary", "Comparatives, Superlatives, Quantifiers", "IELTS listening practice + gap-fill + note-taking", "Students can comprehend gist, detail, and note key ideas from IELTS listening sections"],
            [4, "Unit 5: Consumerism – Speaking", "Shopping, Consumer habits, Advertising vocabulary", "Comparatives, Superlatives, Quantifiers", "Discussion + IELTS Speaking Part 1/2/3 practice", "Students can respond to IELTS Speaking topics with fluency and appropriate grammar/vocabulary"],
            [5, "Review 5: Consumerism", "Vocabulary from Unit 5", "Grammar from Unit 5", "Vocabulary & grammar quiz + integrated IELTS skills practice", "Students can consolidate knowledge of vocabulary and grammar from Unit 5"],
            [6, "Unit 6: Leisure Time – Reading", "Hobbies, Leisure activities, Entertainment vocabulary", "Present simple/continuous, Future forms, Gerunds/Infinitives", "Read IELTS-style passage + comprehension questions + vocabulary tasks", "Students can identify gist, detail, and inference in reading tasks"],
            [7, "Unit 6: Leisure Time – Writing", "Hobbies, Leisure activities, Entertainment vocabulary", "Present simple/continuous, Future forms, Gerunds/Infinitives", "Write IELTS Task 1 or 2 essay (150–250 words) + peer review", "Students can produce structured, coherent IELTS essays with appropriate grammar and vocabulary"],
            [8, "Unit 6: Leisure Time – Listening", "Hobbies, Leisure activities, Entertainment vocabulary", "Present simple/continuous, Future forms, Gerunds/Infinitives", "IELTS listening practice + gap-fill + note-taking", "Students can comprehend gist, detail, and note key ideas from IELTS listening sections"],
            [9, "Unit 6: Leisure Time – Speaking", "Hobbies, Leisure activities, Entertainment vocabulary", "Present simple/continuous, Future forms, Gerunds/Infinitives", "Discussion + IELTS Speaking Part 1/2/3 practice", "Students can respond to IELTS Speaking topics with fluency and appropriate grammar/vocabulary"],
            [10, "Review 6: Leisure Time", "Vocabulary from Unit 6", "Grammar from Unit 6", "Vocabulary & grammar quiz + integrated IELTS skills practice", "Students can consolidate knowledge of vocabulary and grammar from Unit 6"],
            [11, "Mid-term Test", "-", "-", "Written & oral test (Units 5–6)", "Students demonstrate mastery of Units 5–6"],
            [12, "Unit 7: Communication – Reading", "Communication styles, Technology vocabulary", "Conditionals, Reported speech", "Read IELTS-style passage + comprehension questions + vocabulary tasks", "Students can identify gist, detail, and inference in reading tasks"],
            [13, "Unit 7: Communication – Writing", "Communication styles, Technology vocabulary", "Conditionals, Reported speech", "Write IELTS Task 1 or 2 essay (150–250 words) + peer review", "Students can produce structured, coherent IELTS essays with appropriate grammar and vocabulary"],
            [14, "Unit 7: Communication – Listening", "Communication styles, Technology vocabulary", "Conditionals, Reported speech", "IELTS listening practice + gap-fill + note-taking", "Students can comprehend gist, detail, and note key ideas from IELTS listening sections"],
            [15, "Unit 7: Communication – Speaking", "Communication styles, Technology vocabulary", "Conditionals, Reported speech", "Discussion + IELTS Speaking Part 1/2/3 practice", "Students can respond to IELTS Speaking topics with fluency and appropriate grammar/vocabulary"],
            [16, "Review 7: Communication", "Vocabulary from Unit 7", "Grammar from Unit 7", "Vocabulary & grammar quiz + integrated IELTS skills practice", "Students can consolidate knowledge of vocabulary and grammar from Unit 7"],
            [17, "Unit 8: Global Issues – Reading", "Global issues, Social vocabulary", "Passive voice, Modals of deduction", "Read IELTS-style passage + comprehension questions + vocabulary tasks", "Students can identify gist, detail, and inference in reading tasks"],
            [18, "Unit 8: Global Issues – Writing", "Global issues, Social vocabulary", "Passive voice, Modals of deduction", "Write IELTS Task 1 or 2 essay (150–250 words) + peer review", "Students can produce structured, coherent IELTS essays with appropriate grammar and vocabulary"],
            [19, "Unit 8: Global Issues – Listening", "Global issues, Social vocabulary", "Passive voice, Modals of deduction", "IELTS listening practice + gap-fill + note-taking", "Students can comprehend gist, detail, and note key ideas from IELTS listening sections"],
            [20, "Unit 8: Global Issues – Speaking", "Global issues, Social vocabulary", "Passive voice, Modals of deduction", "Discussion + IELTS Speaking Part 1/2/3 practice", "Students can respond to IELTS Speaking topics with fluency and appropriate grammar/vocabulary"],
            [21, "Review 8: Global Issues", "Vocabulary from Unit 8", "Grammar from Unit 8", "Vocabulary & grammar quiz + integrated IELTS skills practice", "Students can consolidate knowledge of vocabulary and grammar from Unit 8"],
            [22, "Extensive Reading: IELTS-style passages", "Mixed-topic vocabulary", "Integrated grammar review", "Read long-form texts + answer comprehension + vocabulary tasks", "Students can apply reading strategies to long-form IELTS passages"],
            [23, "Consolidation & Sharing", "Mixed-topic vocabulary", "Integrated grammar review", "Speaking presentations + peer feedback", "Students can integrate and present knowledge across topics"],
            [24, "Final Test", "-", "-", "Full IELTS 4 skills test", "Students demonstrate mastery of Units 5–8"],
        ];

        foreach ($lessons_ielts4 as $lesson) {
            $ielts4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 5 ==========
        $ielts5 = Subject::where('name', 'ICY Ielts 5')->first();

        $lessons_ielts5 = [
            [1, "Unit 1: The Man-made Environment – Reading", "Buildings, Architecture, Urban development", "There is/are, Passive voice, Relative clauses", "Read IELTS passage + answer comprehension + vocabulary questions", "Students can apply scanning/skimming strategies to locate information"],
            [2, "Unit 1: The Man-made Environment – Writing", "Buildings, Architecture, Urban development", "There is/are, Passive voice, Relative clauses", "Write IELTS Task 1 or 2 essay (150–250 words) using topic vocabulary", "Students can write essays with clear argumentation and cohesion"],
            [3, "Unit 1: The Man-made Environment – Listening", "Buildings, Architecture, Urban development", "There is/are, Passive voice, Relative clauses", "IELTS listening test practice + gap-fill + note completion", "Students can understand gist, detail, and recognize distractors in listening"],
            [4, "Unit 1: The Man-made Environment – Speaking", "Buildings, Architecture, Urban development", "There is/are, Passive voice, Relative clauses", "Pair/group practice + IELTS Speaking Part 1/2/3 tasks", "Students can speak fluently and accurately on related topics"],
            [5, "Review 1: The Man-made Environment", "Vocabulary from Unit 1", "Grammar from Unit 1", "Review quiz + integrated skill practice + mini project", "Students can consolidate vocabulary, grammar, and skills from Unit 1"],
            [6, "Unit 2: Nature and Conservation – Reading", "Environment, Conservation, Natural resources", "Conditionals, Modals (must, should, might)", "Read IELTS passage + answer comprehension + vocabulary questions", "Students can infer meaning from context and locate answers"],
            [7, "Unit 2: Nature and Conservation – Writing", "Environment, Conservation, Natural resources", "Conditionals, Modals (must, should, might)", "Write IELTS Task 1 or 2 essay (150–250 words) using topic vocabulary", "Students can write essays using cause-effect and problem-solution structures"],
            [8, "Unit 2: Nature and Conservation – Listening", "Environment, Conservation, Natural resources", "Conditionals, Modals (must, should, might)", "IELTS listening test practice + gap-fill + note completion", "Students can listen for gist, specific details and take notes effectively"],
            [9, "Unit 2: Nature and Conservation – Speaking", "Environment, Conservation, Natural resources", "Conditionals, Modals (must, should, might)", "Pair/group practice + IELTS Speaking Part 1/2/3 tasks", "Students can discuss environmental issues using appropriate vocabulary"],
            [10, "Review 2: Nature and Conservation", "Vocabulary from Unit 2", "Grammar from Unit 2", "Review quiz + integrated skill practice + mini project", "Students can consolidate vocabulary, grammar, and skills from Unit 2"],
            [11, "Unit 3: Science and Technology – Reading", "Technology, Innovation, Research", "Complex sentences, Noun clauses", "Read IELTS passage + answer comprehension + vocabulary questions", "Students can identify writer’s opinion and supporting evidence"],
            [12, "Unit 3: Science and Technology – Writing", "Technology, Innovation, Research", "Complex sentences, Noun clauses", "Write IELTS Task 1 or 2 essay (150–250 words) using topic vocabulary", "Students can write essays with logical flow and advanced connectors"],
            [13, "Unit 3: Science and Technology – Listening", "Technology, Innovation, Research", "Complex sentences, Noun clauses", "IELTS listening test practice + gap-fill + note completion", "Students can understand lecture-style listening and paraphrasing"],
            [14, "Unit 3: Science and Technology – Speaking", "Technology, Innovation, Research", "Complex sentences, Noun clauses", "Pair/group practice + IELTS Speaking Part 1/2/3 tasks", "Students can present opinions clearly using complex sentence forms"],
            [15, "Review 3: Science and Technology", "Vocabulary from Unit 3", "Grammar from Unit 3", "Review quiz + integrated skill practice + mini project", "Students can consolidate vocabulary, grammar, and skills from Unit 3"],
            [16, "Unit 4: Culture and Society – Reading", "Culture, Society, Beliefs", "Reported speech, Relative clauses", "Read IELTS passage + answer comprehension + vocabulary questions", "Students can recognize writer attitude and tone"],
            [17, "Unit 4: Culture and Society – Writing", "Culture, Society, Beliefs", "Reported speech, Relative clauses", "Write IELTS Task 1 or 2 essay (150–250 words) using topic vocabulary", "Students can write persuasive essays using relevant examples"],
            [18, "Unit 4: Culture and Society – Listening", "Culture, Society, Beliefs", "Reported speech, Relative clauses", "IELTS listening test practice + gap-fill + note completion", "Students can identify main ideas and supporting details from recordings"],
            [19, "Unit 4: Culture and Society – Speaking", "Culture, Society, Beliefs", "Reported speech, Relative clauses", "Pair/group practice + IELTS Speaking Part 1/2/3 tasks", "Students can speak about culture confidently with appropriate vocabulary"],
            [20, "Review 4: Culture and Society", "Vocabulary from Unit 4", "Grammar from Unit 4", "Review quiz + integrated skill practice + mini project", "Students can consolidate vocabulary, grammar, and skills from Unit 4"],
            [21, "Mid-term Test", "-", "-", "Written & oral test (Units 1–2)", "Students demonstrate mastery of Units 1–2"],
            [22, "Project-based Learning: Environment Poster", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [23, "Project-based Learning: Culture Exhibition", "Integrated review vocabulary", "Integrated review grammar", "Prepare and present a project", "Students apply knowledge creatively in real tasks"],
            [24, "Final Test", "-", "-", "Written & oral test (Units 1–4)", "Students demonstrate mastery of Units 1–4"],
        ];

        foreach ($lessons_ielts5 as $lesson) {
            $ielts5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 6 ==========
        $ielts6 = Subject::where('name', 'ICY Ielts 6')->first();

        $lessons_ielts6 = [
            [1, "Unit 5: Business and Work – Reading", "Work, Careers, Business terms", "Present perfect, Future tenses, Conditionals", "Read IELTS passage + comprehension + vocabulary exercises", "Students can analyze IELTS texts for gist, detail, and inference."],
            [2, "Unit 5: Business and Work – Writing", "Work, Careers, Business terms", "Present perfect, Future tenses, Conditionals", "Write IELTS Task 1/2 essay (150–250 words) with feedback", "Students can produce IELTS essays with task achievement and coherence."],
            [3, "Unit 5: Business and Work – Listening", "Work, Careers, Business terms", "Present perfect, Future tenses, Conditionals", "IELTS listening test practice + multiple choice + gap-fill", "Students can understand detail and gist in IELTS listening tasks."],
            [4, "Unit 5: Business and Work – Speaking", "Work, Careers, Business terms", "Present perfect, Future tenses, Conditionals", "Speaking mock test: IELTS Part 1/2/3 practice", "Students can speak fluently and coherently on IELTS topics."],
            [5, "Review 5: Business and Work", "Vocabulary from Unit 5", "Grammar from Unit 5", "Review quiz + integrated IELTS skills + mini test", "Students can consolidate key vocabulary, grammar, and exam skills from the unit."],
            [6, "Unit 6: The Natural Environment – Reading", "Environment, Nature, Climate change vocabulary", "Passive voice, Modals, Relative clauses", "Read IELTS passage + comprehension + vocabulary exercises", "Students can analyze IELTS texts for gist, detail, and inference."],
            [7, "Unit 6: The Natural Environment – Writing", "Environment, Nature, Climate change vocabulary", "Passive voice, Modals, Relative clauses", "Write IELTS Task 1/2 essay (150–250 words) with feedback", "Students can produce IELTS essays with task achievement and coherence."],
            [8, "Unit 6: The Natural Environment – Listening", "Environment, Nature, Climate change vocabulary", "Passive voice, Modals, Relative clauses", "IELTS listening test practice + multiple choice + gap-fill", "Students can understand detail and gist in IELTS listening tasks."],
            [9, "Unit 6: The Natural Environment – Speaking", "Environment, Nature, Climate change vocabulary", "Passive voice, Modals, Relative clauses", "Speaking mock test: IELTS Part 1/2/3 practice", "Students can speak fluently and coherently on IELTS topics."],
            [10, "Review 6: The Natural Environment", "Vocabulary from Unit 6", "Grammar from Unit 6", "Review quiz + integrated IELTS skills + mini test", "Students can consolidate key vocabulary, grammar, and exam skills from the unit."],
            [11, "Unit 7: Education Systems – Reading", "Schools, Education systems, Academic vocabulary", "Reported speech, Gerunds & infinitives, Articles", "Read IELTS passage + comprehension + vocabulary exercises", "Students can analyze IELTS texts for gist, detail, and inference."],
            [12, "Mid-term Test", "-", "-", "Written & oral test (Units 5–6)", "Students can demonstrate mastery of Units 5–6 in IELTS-style test."],
            [13, "Unit 7: Education Systems – Writing", "Schools, Education systems, Academic vocabulary", "Reported speech, Gerunds & infinitives, Articles", "Write IELTS Task 1/2 essay (150–250 words) with feedback", "Students can produce IELTS essays with task achievement and coherence."],
            [14, "Unit 7: Education Systems – Listening", "Schools, Education systems, Academic vocabulary", "Reported speech, Gerunds & infinitives, Articles", "IELTS listening test practice + multiple choice + gap-fill", "Students can understand detail and gist in IELTS listening tasks."],
            [15, "Unit 7: Education Systems – Speaking", "Schools, Education systems, Academic vocabulary", "Reported speech, Gerunds & infinitives, Articles", "Speaking mock test: IELTS Part 1/2/3 practice", "Students can speak fluently and coherently on IELTS topics."],
            [16, "Review 7: Education Systems", "Vocabulary from Unit 7", "Grammar from Unit 7", "Review quiz + integrated IELTS skills + mini test", "Students can consolidate key vocabulary, grammar, and exam skills from the unit."],
            [17, "Unit 8: Festivals and Traditions – Reading", "Festivals, Traditions, Cultural vocabulary", "Comparatives, Superlatives, Adverb clauses", "Read IELTS passage + comprehension + vocabulary exercises", "Students can analyze IELTS texts for gist, detail, and inference."],
            [18, "Unit 8: Festivals and Traditions – Writing", "Festivals, Traditions, Cultural vocabulary", "Comparatives, Superlatives, Adverb clauses", "Write IELTS Task 1/2 essay (150–250 words) with feedback", "Students can produce IELTS essays with task achievement and coherence."],
            [19, "Unit 8: Festivals and Traditions – Listening", "Festivals, Traditions, Cultural vocabulary", "Comparatives, Superlatives, Adverb clauses", "IELTS listening test practice + multiple choice + gap-fill", "Students can understand detail and gist in IELTS listening tasks."],
            [20, "Unit 8: Festivals and Traditions – Speaking", "Festivals, Traditions, Cultural vocabulary", "Comparatives, Superlatives, Adverb clauses", "Speaking mock test: IELTS Part 1/2/3 practice", "Students can speak fluently and coherently on IELTS topics."],
            [21, "Review 8: Festivals and Traditions", "Vocabulary from Unit 8", "Grammar from Unit 8", "Review quiz + integrated IELTS skills + mini test", "Students can consolidate key vocabulary, grammar, and exam skills from the unit."],
            [22, "IELTS Integrated Practice 1", "Review Units 5–6", "Grammar consolidation", "Full IELTS practice session with mixed skills", "Students can apply integrated IELTS skills in exam-like practice."],
            [23, "IELTS Integrated Practice 2", "Review Units 7–8", "Grammar consolidation", "Full IELTS practice session with mixed skills", "Students can apply integrated IELTS skills in exam-like practice."],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–8)", "Students can demonstrate mastery of Units 7–8 in IELTS-style test."],
        ];

        foreach ($lessons_ielts6 as $lesson) {
            $ielts6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 7 ==========
        $ielts7 = Subject::where('name', 'ICY Ielts 7')->first();

        $lessons_ielts7 = [
            [1, "Unit 1: Urban and Rural Life – Reading", "Urban life vocabulary, Rural life terms, Community and lifestyle", "Present simple/continuous, Comparatives & superlatives, Relative clauses", "Read IELTS passage + comprehension questions + vocabulary note-taking", "Students can apply IELTS reading strategies (skimming, scanning, inference)."],
            [2, "Unit 1: Urban and Rural Life – Writing", "Urban life vocabulary, Rural life terms, Community and lifestyle", "Present simple/continuous, Comparatives & superlatives, Relative clauses", "Write IELTS Task 1/2 essay (150–250 words) with peer and teacher feedback", "Students can produce IELTS essays with task achievement, coherence, and lexical range."],
            [3, "Unit 1: Urban and Rural Life – Listening", "Urban life vocabulary, Rural life terms, Community and lifestyle", "Present simple/continuous, Comparatives & superlatives, Relative clauses", "IELTS listening tasks: note completion, multiple choice, sentence completion", "Students can identify gist, detail, and handle distractors in listening passages."],
            [4, "Unit 1: Urban and Rural Life – Speaking", "Urban life vocabulary, Rural life terms, Community and lifestyle", "Present simple/continuous, Comparatives & superlatives, Relative clauses", "Mock test: IELTS Speaking Part 1, 2, and 3 practice", "Students can speak confidently, fluently, and with accurate grammar on IELTS topics."],
            [5, "Review 1: Urban and Rural Life", "Vocabulary from Unit 1", "Grammar from Unit 1", "Review quiz + integrated skills practice + vocabulary consolidation", "Students can consolidate language and test-taking skills from the completed unit."],
            [6, "Unit 2: Health – Reading", "Health issues, Medical vocabulary, Healthy lifestyle", "Modal verbs, Conditionals, Passive voice", "Read IELTS passage + comprehension questions + vocabulary note-taking", "Students can apply IELTS reading strategies (skimming, scanning, inference)."],
            [7, "Unit 2: Health – Writing", "Health issues, Medical vocabulary, Healthy lifestyle", "Modal verbs, Conditionals, Passive voice", "Write IELTS Task 1/2 essay (150–250 words) with peer and teacher feedback", "Students can produce IELTS essays with task achievement, coherence, and lexical range."],
            [8, "Unit 2: Health – Listening", "Health issues, Medical vocabulary, Healthy lifestyle", "Modal verbs, Conditionals, Passive voice", "IELTS listening tasks: note completion, multiple choice, sentence completion", "Students can identify gist, detail, and handle distractors in listening passages."],
            [9, "Unit 2: Health – Speaking", "Health issues, Medical vocabulary, Healthy lifestyle", "Modal verbs, Conditionals, Passive voice", "Mock test: IELTS Speaking Part 1, 2, and 3 practice", "Students can speak confidently, fluently, and with accurate grammar on IELTS topics."],
            [10, "Review 2: Health", "Vocabulary from Unit 2", "Grammar from Unit 2", "Review quiz + integrated skills practice + vocabulary consolidation", "Students can consolidate language and test-taking skills from the completed unit."],
            [11, "Unit 3: Art and Architecture – Reading", "Art terms, Architecture vocabulary, Cultural heritage", "Reported speech, Articles, Complex sentences", "Read IELTS passage + comprehension questions + vocabulary note-taking", "Students can apply IELTS reading strategies (skimming, scanning, inference)."],
            [12, "Mid-term Test", "-", "-", "Written & oral test (Units 1–2)", "Students can demonstrate mastery of Units 1–2 in IELTS-style test."],
            [13, "Unit 3: Art and Architecture – Writing", "Art terms, Architecture vocabulary, Cultural heritage", "Reported speech, Articles, Complex sentences", "Write IELTS Task 1/2 essay (150–250 words) with peer and teacher feedback", "Students can produce IELTS essays with task achievement, coherence, and lexical range."],
            [14, "Unit 3: Art and Architecture – Listening", "Art terms, Architecture vocabulary, Cultural heritage", "Reported speech, Articles, Complex sentences", "IELTS listening tasks: note completion, multiple choice, sentence completion", "Students can identify gist, detail, and handle distractors in listening passages."],
            [15, "Unit 3: Art and Architecture – Speaking", "Art terms, Architecture vocabulary, Cultural heritage", "Reported speech, Articles, Complex sentences", "Mock test: IELTS Speaking Part 1, 2, and 3 practice", "Students can speak confidently, fluently, and with accurate grammar on IELTS topics."],
            [16, "Review 3: Art and Architecture", "Vocabulary from Unit 3", "Grammar from Unit 3", "Review quiz + integrated skills practice + vocabulary consolidation", "Students can consolidate language and test-taking skills from the completed unit."],
            [17, "Unit 4: Finance and Business – Reading", "Finance vocabulary, Business terms, Economic activities", "Future tenses, Quantifiers, Adverbial clauses", "Read IELTS passage + comprehension questions + vocabulary note-taking", "Students can apply IELTS reading strategies (skimming, scanning, inference)."],
            [18, "Unit 4: Finance and Business – Writing", "Finance vocabulary, Business terms, Economic activities", "Future tenses, Quantifiers, Adverbial clauses", "Write IELTS Task 1/2 essay (150–250 words) with peer and teacher feedback", "Students can produce IELTS essays with task achievement, coherence, and lexical range."],
            [19, "Unit 4: Finance and Business – Listening", "Finance vocabulary, Business terms, Economic activities", "Future tenses, Quantifiers, Adverbial clauses", "IELTS listening tasks: note completion, multiple choice, sentence completion", "Students can identify gist, detail, and handle distractors in listening passages."],
            [20, "Unit 4: Finance and Business – Speaking", "Finance vocabulary, Business terms, Economic activities", "Future tenses, Quantifiers, Adverbial clauses", "Mock test: IELTS Speaking Part 1, 2, and 3 practice", "Students can speak confidently, fluently, and with accurate grammar on IELTS topics."],
            [21, "IELTS Integrated Practice 1", "Review Units 1–2", "Grammar consolidation", "IELTS practice with mixed tasks and time management focus", "Students can apply integrated IELTS skills under exam-like conditions."],
            [22, "IELTS Integrated Practice 2", "Review Units 3–4", "Grammar consolidation", "IELTS practice with mixed tasks and time management focus", "Students can apply integrated IELTS skills under exam-like conditions."],
            [23, "Review 4: Finance and Business", "Vocabulary from Unit 4", "Grammar from Unit 4", "Review quiz + integrated skills practice + vocabulary consolidation", "Students can consolidate language and test-taking skills from the completed unit."],
            [24, "Final Test", "-", "-", "Written & oral test (Units 3–4)", "Students can demonstrate mastery of Units 3–4 in IELTS-style test."],
        ];

        foreach ($lessons_ielts7 as $lesson) {
            $ielts7->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY IELTS 8 ==========
        $ielts8 = Subject::where('name', 'ICY IELTS 8')->first();

        $lessons_ielts8 = [
            [1, "Unit 5: History – Reading", "Historical events, Civilizations, Timelines", "Past tenses, Reported speech, Passive voice", "Read IELTS passage + comprehension + vocabulary analysis", "Students can apply IELTS reading strategies for different question types."],
            [2, "Unit 5: History – Writing", "Historical events, Civilizations, Timelines", "Past tenses, Reported speech, Passive voice", "Write IELTS Task 1/2 essay (150–250 words) with corrections", "Students can produce IELTS essays that meet criteria for task achievement, coherence, and vocabulary."],
            [3, "Unit 5: History – Listening", "Historical events, Civilizations, Timelines", "Past tenses, Reported speech, Passive voice", "IELTS listening sections practice + note-taking tasks", "Students can capture key ideas and supporting details in IELTS listening tasks."],
            [4, "Unit 5: History – Speaking", "Historical events, Civilizations, Timelines", "Past tenses, Reported speech, Passive voice", "Speaking mock test with IELTS examiner feedback (Part 1/2/3)", "Students can speak fluently, with good grammar and pronunciation in IELTS contexts."],
            [5, "Review 5: History", "Vocabulary from Unit 5", "Grammar from Unit 5", "Unit review quiz + integrated practice + vocabulary check", "Students can consolidate all skills and vocabulary learned in the unit."],
            [6, "Unit 6: Science and Technology – Reading", "Technology terms, Scientific vocabulary, Innovation", "Conditionals, Relative clauses, Complex sentences", "Read IELTS passage + comprehension + vocabulary analysis", "Students can apply IELTS reading strategies for different question types."],
            [7, "Unit 6: Science and Technology – Writing", "Technology terms, Scientific vocabulary, Innovation", "Conditionals, Relative clauses, Complex sentences", "Write IELTS Task 1/2 essay (150–250 words) with corrections", "Students can produce IELTS essays that meet criteria for task achievement, coherence, and vocabulary."],
            [8, "Unit 6: Science and Technology – Listening", "Technology terms, Scientific vocabulary, Innovation", "Conditionals, Relative clauses, Complex sentences", "IELTS listening sections practice + note-taking tasks", "Students can capture key ideas and supporting details in IELTS listening tasks."],
            [9, "Unit 6: Science and Technology – Speaking", "Technology terms, Scientific vocabulary, Innovation", "Conditionals, Relative clauses, Complex sentences", "Speaking mock test with IELTS examiner feedback (Part 1/2/3)", "Students can speak fluently, with good grammar and pronunciation in IELTS contexts."],
            [10, "Review 6: Science and Technology", "Vocabulary from Unit 6", "Grammar from Unit 6", "Unit review quiz + integrated practice + vocabulary check", "Students can consolidate all skills and vocabulary learned in the unit."],
            [11, "Unit 7: Television, News and Current Affairs – Reading", "Media vocabulary, News terms, Broadcasting", "Direct and indirect speech, Adverb clauses, Question formation", "Read IELTS passage + comprehension + vocabulary analysis", "Students can apply IELTS reading strategies for different question types."],
            [12, "Mid-term Test", "-", "-", "Written & oral test (Units 5–6)", "Students can demonstrate mastery of Units 5–6 in an IELTS-style test."],
            [13, "Unit 7: Television, News and Current Affairs – Writing", "Media vocabulary, News terms, Broadcasting", "Direct and indirect speech, Adverb clauses, Question formation", "Write IELTS Task 1/2 essay (150–250 words) with corrections", "Students can produce IELTS essays that meet criteria for task achievement, coherence, and vocabulary."],
            [14, "Unit 7: Television, News and Current Affairs – Listening", "Media vocabulary, News terms, Broadcasting", "Direct and indirect speech, Adverb clauses, Question formation", "IELTS listening sections practice + note-taking tasks", "Students can capture key ideas and supporting details in IELTS listening tasks."],
            [15, "Unit 7: Television, News and Current Affairs – Speaking", "Media vocabulary, News terms, Broadcasting", "Direct and indirect speech, Adverb clauses, Question formation", "Speaking mock test with IELTS examiner feedback (Part 1/2/3)", "Students can speak fluently, with good grammar and pronunciation in IELTS contexts."],
            [16, "Review 7: Television, News and Current Affairs", "Vocabulary from Unit 7", "Grammar from Unit 7", "Unit review quiz + integrated practice + vocabulary check", "Students can consolidate all skills and vocabulary learned in the unit."],
            [17, "Unit 8: Culture – Reading", "Cultural traditions, Arts vocabulary, Heritage", "Comparatives, Superlatives, Quantifiers", "Read IELTS passage + comprehension + vocabulary analysis", "Students can apply IELTS reading strategies for different question types."],
            [18, "Unit 8: Culture – Writing", "Cultural traditions, Arts vocabulary, Heritage", "Comparatives, Superlatives, Quantifiers", "Write IELTS Task 1/2 essay (150–250 words) with corrections", "Students can produce IELTS essays that meet criteria for task achievement, coherence, and vocabulary."],
            [19, "Unit 8: Culture – Listening", "Cultural traditions, Arts vocabulary, Heritage", "Comparatives, Superlatives, Quantifiers", "IELTS listening sections practice + note-taking tasks", "Students can capture key ideas and supporting details in IELTS listening tasks."],
            [20, "Unit 8: Culture – Speaking", "Cultural traditions, Arts vocabulary, Heritage", "Comparatives, Superlatives, Quantifiers", "Speaking mock test with IELTS examiner feedback (Part 1/2/3)", "Students can speak fluently, with good grammar and pronunciation in IELTS contexts."],
            [21, "Review 8: Culture", "Vocabulary from Unit 8", "Grammar from Unit 8", "Unit review quiz + integrated practice + vocabulary check", "Students can consolidate all skills and vocabulary learned in the unit."],
            [22, "IELTS Integrated Practice 1", "Review Units 5–6", "Grammar consolidation", "IELTS integrated practice: timed exam simulation", "Students can integrate all IELTS skills in a timed test-like environment."],
            [23, "IELTS Integrated Practice 2", "Review Units 7–8", "Grammar consolidation", "IELTS integrated practice: timed exam simulation", "Students can integrate all IELTS skills in a timed test-like environment."],
            [24, "Final Test", "-", "-", "Written & oral test (Units 7–8)", "Students can demonstrate mastery of Units 7–8 in an IELTS-style test."],
        ];

        foreach ($lessons_ielts8 as $lesson) {
            $ielts8->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 1 ==========
        $business1 = Subject::where('name', 'ICY Business 1')->first();

        $lessons_business1 = [
            [1,  "Unit 1: Introductions and Names – Lesson 1", "Business greetings, introductions", "Present simple", "Role-play business introductions", "Students can introduce themselves professionally"],
            [2,  "Unit 1: Introductions and Names – Lesson 2", "Job titles, departments", "Present simple", "Interview a classmate about their role", "Students can ask and answer about roles/departments"],
            [3,  "Unit 2: Describing People – Lesson 1", "Physical appearance, personality traits", "Adjectives, verb to be", "Describe a coworker in pairs", "Students can describe people accurately"],
            [4,  "Unit 2: Describing People – Lesson 2", "Strengths & weaknesses vocabulary", "Comparatives & superlatives", "Group ranking activity", "Students can compare and evaluate people"],
            [5,  "Unit 3: Clothes – Lesson 1", "Clothing and dress codes", "Countable/uncountable nouns", "Discuss dress code at work", "Students can talk about appropriate work clothes"],
            [6,  "Unit 3: Clothes – Lesson 2", "Shopping and style", "Present continuous", "Create an outfit proposal", "Students can describe clothing and style choices"],
            [7,  "Unit 4: Routines – Lesson 1", "Daily routines, work schedule", "Adverbs of frequency", "Write and present daily routine", "Students can talk about work routines"],
            [8,  "Unit 4: Routines – Lesson 2", "Meetings and schedules", "Time expressions", "Plan a weekly schedule in groups", "Students can organize and describe schedules"],
            [9,  "Unit 5: Dates – Lesson 1", "Days, months, ordinal numbers", "Prepositions of time", "Set up a meeting calendar", "Students can use time expressions accurately"],
            [10, "Unit 5: Dates – Lesson 2", "Making appointments", "Future with 'will'", "Simulate booking meetings", "Students can make and confirm appointments"],
            [11, "Unit 6: Jobs – Lesson 1", "Job titles, roles", "Present simple", "Guess the job activity", "Students can describe jobs and roles"],
            [12, "Unit 6: Jobs – Lesson 2", "Workplaces and tasks", "Modal verbs: can/can’t", "Create job descriptions", "Students can talk about abilities at work"],
            [13, "Mid-term Test (Units 1–6)", "-", "-", "Written and oral test", "Students demonstrate mastery of Units 1–6"],
            [14, "Unit 7: Favorites – Lesson 1", "Likes/dislikes vocabulary", "Like/love/hate + V-ing", "Interview peers on preferences", "Students can talk about personal preferences"],
            [15, "Unit 7: Favorites – Lesson 2", "Hobbies and free time", "Present continuous", "Create hobby posters", "Students can describe hobbies and interests"],
            [16, "Unit 8: Sports and Exercise – Lesson 1", "Sports vocabulary", "Frequency adverbs", "Plan a company sports day", "Students can talk about sports activities"],
            [17, "Unit 8: Sports and Exercise – Lesson 2", "Health & fitness vocabulary", "Have to / don’t have to", "Make a fitness plan", "Students can give advice on exercise"],
            [18, "Unit 9: Locations – Lesson 1", "Office locations, places", "There is / There are", "Draw and present office maps", "Students can describe locations"],
            [19, "Unit 9: Locations – Lesson 2", "Giving directions", "Imperatives", "Office tour role-play", "Students can give and follow directions"],
            [20, "Unit 10: The Family – Lesson 1", "Family members, relationships", "Possessive adjectives", "Family tree activity", "Students can describe family relationships"],
            [21, "Unit 11: Entertainment – Lesson 1", "Leisure activities", "Can/can’t", "Plan a team-building event", "Students can talk about entertainment preferences"],
            [22, "Unit 11: Entertainment – Lesson 2", "Making invitations", "Would like to", "Role-play invitations", "Students can invite and respond politely"],
            [23, "Review (Units 7–11)", "Vocabulary from Units 7–11", "Grammar from Units 7–11", "Quiz + team project", "Students consolidate learned language"],
            [24, "Final Test (Units 1–11)", "-", "-", "Written & oral test", "Students demonstrate mastery of all units"],
        ];

        foreach ($lessons_business1 as $lesson) {
            $business1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 2 ==========
        $business2 = Subject::where('name', 'ICY Business 2')->first();

        $lessons_business2 = [
            [1,  "Unit 1: The Weekend", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [2,  "Unit 2: City Transportation", "Listening-focused vocabulary", "Question forms", "Debate session", "Enhance speaking fluency"],
            [3,  "Unit 4: Celebrations", "Functional expressions", "Sentence stress", "Storytelling in pairs", "Practice real-life dialogues"],
            [4,  "Unit 5: Restaurants", "Useful collocations", "Intonation and reduction", "Interview a partner", "Strengthen grammar accuracy"],
            [5,  "Unit 6: Gifts", "Spoken interaction vocabulary", "Grammar in context", "Mini-presentation", "Build confidence in oral interaction"],
            [6,  "Unit 7: Air Travel", "Topic-related vocabulary", "Tense practice", "Customer service simulation", "Apply vocabulary in context"],
            [7,  "Unit 8: Mishaps", "Listening-focused vocabulary", "Question forms", "Problem-solving discussion", "Improve pronunciation and stress"],
            [8,  "Unit 9: Jobs", "Functional expressions", "Sentence stress", "Create and act a dialogue", "Encourage spontaneous speaking"],
            [9,  "Unit 10: Keeping Fit", "Useful collocations", "Intonation and reduction", "Impromptu speaking", "Promote collaborative communication"],
            [10, "Unit 11: Invitations", "Spoken interaction vocabulary", "Grammar in context", "Pitch an idea to classmates", "Integrate listening and speaking skills"],
            [11, "Unit 12: Campus Life", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [12, "Unit 13: Hobbies and Pastimes", "Listening-focused vocabulary", "Question forms", "Debate session", "Enhance speaking fluency"],
            [13, "Mid-term Test", "Comprehensive vocabulary review", "Grammar consolidation (Units 1–12)", "Mid-term integrated listening and speaking test", "Assess mid-term progress in listening, grammar, and speaking fluency"],
            [14, "Unit 14: Shopping Problems", "Useful collocations", "Intonation and reduction", "Interview a partner", "Strengthen grammar accuracy"],
            [15, "Unit 15: Hotel Services", "Spoken interaction vocabulary", "Grammar in context", "Mini-presentation", "Build confidence in oral interaction"],
            [16, "Unit 16: Movies", "Topic-related vocabulary", "Tense practice", "Customer service simulation", "Apply vocabulary in context"],
            [17, "Unit 17: Fears", "Listening-focused vocabulary", "Question forms", "Problem-solving discussion", "Improve pronunciation and stress"],
            [18, "Unit 18: Phone Messages", "Functional expressions", "Sentence stress", "Create and act a dialogue", "Encourage spontaneous speaking"],
            [19, "Unit 19: Touring a City", "Useful collocations", "Intonation and reduction", "Impromptu speaking", "Promote collaborative communication"],
            [20, "Unit 20: Airports", "Spoken interaction vocabulary", "Grammar in context", "Pitch an idea to classmates", "Integrate listening and speaking skills"],
            [21, "Unit 21: Hotels", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [22, "Unit 22: Traffic", "Listening-focused vocabulary", "Question forms", "Debate session", "Enhance speaking fluency"],
            [23, "Unit 23: Roommates", "Functional expressions", "Sentence stress", "Storytelling in pairs", "Practice real-life dialogues"],
            [24, "Final Test", "Comprehensive vocabulary review", "Grammar consolidation (Full course)", "Final integrated listening and speaking test", "Evaluate full-course achievements and readiness for next level"],
        ];

        foreach ($lessons_business2 as $lesson) {
            $business2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 3 ==========
        $business3 = Subject::where('name', 'ICY Business 3')->first();

        $lessons_business3 = [
            [1,  "Unit 2: Plans", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [2,  "Unit 3: Successful Businesses", "Listening-focused vocabulary", "Question forms", "Debate session", "Enhance speaking fluency"],
            [3,  "Unit 4: Apologies and Excuses", "Functional expressions", "Sentence stress", "Storytelling in pairs", "Practice real-life dialogues"],
            [4,  "Unit 5: Character Traits", "Useful collocations", "Intonation and reduction", "Interview a partner", "Strengthen grammar accuracy"],
            [5,  "Unit 6: Travel", "Spoken interaction vocabulary", "Grammar in context", "Mini-presentation", "Build confidence in oral interaction"],
            [6,  "Unit 7: Housing", "Topic-related vocabulary", "Tense practice", "Customer service simulation", "Apply vocabulary in context"],
            [7,  "Unit 8: Can You Believe It?", "Listening-focused vocabulary", "Question forms", "Problem-solving discussion", "Improve pronunciation and stress"],
            [8,  "Unit 10: Television", "Functional expressions", "Sentence stress", "Create and act a dialogue", "Encourage spontaneous speaking"],
            [9,  "Unit 11: Cities", "Useful collocations", "Intonation and reduction", "Impromptu speaking", "Promote collaborative communication"],
            [10, "Unit 12: Urban Life", "Spoken interaction vocabulary", "Grammar in context", "Pitch an idea to classmates", "Integrate listening and speaking skills"],
            [11, "Unit 13: Special Days", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [12, "Mid-term Test", "Comprehensive vocabulary review", "Grammar consolidation (Units 2–13)", "Mid-term integrated listening and speaking test", "Assess mid-term progress in listening, grammar, and speaking fluency"],
            [13, "Unit 14: Fashion", "Functional expressions", "Sentence stress", "Storytelling in pairs", "Practice real-life dialogues"],
            [14, "Unit 15: Favorites", "Useful collocations", "Intonation and reduction", "Interview a partner", "Strengthen grammar accuracy"],
            [15, "Unit 16: Phone Messages", "Spoken interaction vocabulary", "Grammar in context", "Mini-presentation", "Build confidence in oral interaction"],
            [16, "Unit 17: Past Events", "Topic-related vocabulary", "Tense practice", "Customer service simulation", "Apply vocabulary in context"],
            [17, "Unit 18: Vacations", "Listening-focused vocabulary", "Question forms", "Problem-solving discussion", "Improve pronunciation and stress"],
            [18, "Unit 19: The News", "Functional expressions", "Sentence stress", "Create and act a dialogue", "Encourage spontaneous speaking"],
            [19, "Unit 20: Opinions", "Useful collocations", "Intonation and reduction", "Impromptu speaking", "Promote collaborative communication"],
            [20, "Unit 21: Famous People", "Spoken interaction vocabulary", "Grammar in context", "Pitch an idea to classmates", "Integrate listening and speaking skills"],
            [21, "Unit 22: Food and Nutrition", "Topic-related vocabulary", "Tense practice", "Role-play scenarios", "Develop gist and detail listening"],
            [22, "Unit 23: Predicaments", "Listening-focused vocabulary", "Question forms", "Debate session", "Enhance speaking fluency"],
            [23, "Unit 24: Global Issues", "Functional expressions", "Sentence stress", "Storytelling in pairs", "Practice real-life dialogues"],
            [24, "Final Test", "Comprehensive vocabulary review", "Grammar consolidation (Full course)", "Final integrated listening and speaking test", "Evaluate full-course achievements and readiness for next level"],
        ];

        foreach ($lessons_business3 as $lesson) {
            $business3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 4 ==========
        $business4 = Subject::where('name', 'ICY Business 4')->first();

        $lessons_business4 = [
            [1, "Listening - Unit 1 & 2: Dạng câu hỏi có một hoặc nhiều người trong hình", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài nghe", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng nghe hiểu và áp dụng vào thực tế"],
            [2, "Reading - Unit 1: Động từ (verb - v)", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài đọc", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng đọc hiểu và áp dụng vào thực tế"],
            [3, "Listening - Unit 3 & 4: Dạng câu hỏi có hình ảnh đồ vật và phong cảnh thiên nhiên", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài nghe", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng nghe hiểu và áp dụng vào thực tế"],
            [4, "Reading - Unit 2: Trợ động từ (auxiliary - aux)", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài đọc", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng đọc hiểu và áp dụng vào thực tế"],
            [5, "Listening - Unit 5 & 6: Câu hỏi Who/Where/When/Which", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài nghe", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng nghe hiểu và áp dụng vào thực tế"],
            [6, "Reading - Unit 3: Thể bị động", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài đọc", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng đọc hiểu và áp dụng vào thực tế"],
            [7, "Listening - Unit 7 & 8: Câu hỏi Why/How/What và Yes/No", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài nghe", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng nghe hiểu và áp dụng vào thực tế"],
            [8, "Reading - Unit 4 & 5: Danh từ và sự hòa hợp giữa chủ ngữ và động từ", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài đọc", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng đọc hiểu và áp dụng vào thực tế"],
            [9, "Listening - Unit 9 & 10: Câu hỏi lựa chọn và bài đối thoại trong công ty", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài nghe", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng nghe hiểu và áp dụng vào thực tế"],
            [10, "Reading - Unit 6: Các thì (Tenses)", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài đọc", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng đọc hiểu và áp dụng vào thực tế"],
            [11, "Listening - Unit 11 & 12: Bài đối thoại khi mua sắm và trong nhà hàng", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài nghe", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng nghe hiểu và áp dụng vào thực tế"],
            [12, "Reading - Unit 7: Tính từ (adjective - adj)", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài đọc", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng đọc hiểu và áp dụng vào thực tế"],
            [13, "Mid-term Test", "", "", "", "Đánh giá năng lực nghe và đọc giữa khóa"],
            [14, "Listening - Unit 13: Bài đối thoại trong ngân hàng", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài nghe", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng nghe hiểu và áp dụng vào thực tế"],
            [15, "Reading - Unit 8: Trạng từ (adverb - adv)", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài đọc", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng đọc hiểu và áp dụng vào thực tế"],
            [16, "Listening - Unit 14: Bài nói có nội dung hướng dẫn, tin nhắn ghi âm", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài nghe", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng nghe hiểu và áp dụng vào thực tế"],
            [17, "Reading - Unit 9: Liên từ (conjunction – conj) và giới từ (preposition – prep)", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài đọc", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng đọc hiểu và áp dụng vào thực tế"],
            [18, "Reading - Unit 10 & 11: Từ vựng (Vocabulary 1 & 2)", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài đọc", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng đọc hiểu và áp dụng vào thực tế"],
            [19, "Listening - Unit 15: Bài nói giới thiệu người và chuyến tham quan", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài nghe", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng nghe hiểu và áp dụng vào thực tế"],
            [20, "Reading - Unit 12 & 13: Từ vựng (3) và Thư tín – Email", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài đọc", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng đọc hiểu và áp dụng vào thực tế"],
            [21, "Listening - Ôn tập Part 4: Nghe theo ngữ cảnh thực tế", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài nghe", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng nghe hiểu và áp dụng vào thực tế"],
            [22, "Reading - Unit 14 & 15: Quảng cáo và Thông báo", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài đọc", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng đọc hiểu và áp dụng vào thực tế"],
            [23, "Project: Listening & Reading Integration – Ứng dụng kỹ năng trong bài tập nhóm", "Từ vựng theo chủ đề bài học", "Ngữ pháp chính liên quan đến dạng bài nghe", "Làm bài luyện kỹ năng, ghi chép ý chính và bài tập củng cố", "Phát triển khả năng nghe hiểu và áp dụng vào thực tế"],
            [24, "Final Test", "", "", "", "Đánh giá năng lực tổng thể cuối khóa"]
          ];

        foreach ($lessons_business4 as $lesson) {
            $business4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 5 ==========
        $business5 = Subject::where('name', 'ICY Business 5')->first();

        $lessons_business5 = [
            [1, "ETS Listening - Test 1", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [2, "ETS Reading - Test 1", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [3, "ETS Listening - Test 2", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [4, "ETS Reading - Test 2", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [5, "ETS Listening - Test 3", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [6, "ETS Reading - Test 3", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [7, "Review 1: ETS Listening & Reading Skills", "Tổng hợp từ vựng và collocations thường gặp trong ETS", "Cấu trúc ngữ pháp trọng tâm trong các bài ETS", "Làm bài luyện tổng hợp, phân tích lỗi sai và thảo luận chiến lược làm bài", "Củng cố kỹ năng nghe – đọc và chiến lược xử lý đề ETS hiệu quả"],
            [8, "ETS Listening - Test 4", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [9, "ETS Reading - Test 4", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [10, "ETS Listening - Test 5", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [11, "ETS Reading - Test 5", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [12, "ETS Listening - Test 6", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [13, "Mid-term Test (ETS Practice)", "", "", "Đánh giá năng lực làm bài ETS giữa khóa", ""],
            [14, "ETS Reading - Test 6", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [15, "ETS Listening - Test 7", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [16, "ETS Reading - Test 7", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [17, "ETS Listening - Test 8", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [18, "ETS Reading - Test 8", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [19, "ETS Listening - Test 9", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [20, "ETS Reading - Test 9", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [21, "Review 2: ETS Integrated Skills", "Tổng hợp từ vựng và collocations thường gặp trong ETS", "Cấu trúc ngữ pháp trọng tâm trong các bài ETS", "Làm bài luyện tổng hợp, phân tích lỗi sai và thảo luận chiến lược làm bài", "Củng cố kỹ năng nghe – đọc và chiến lược xử lý đề ETS hiệu quả"],
            [22, "ETS Listening - Test 10", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [23, "ETS Reading - Test 10", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [24, "Final Test (ETS Full Simulation)", "", "", "Đánh giá năng lực tổng thể với đề ETS chuẩn cuối khóa", ""]
        ];

        foreach ($lessons_business5 as $lesson) {
            $business5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 6 ==========
        $business6 = Subject::where('name', 'ICY Business 6')->first();

        $lessons_business6 = [
            [1, "ETS Listening - Test 1", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [2, "ETS Reading - Test 1", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [3, "ETS Listening - Test 2", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [4, "ETS Reading - Test 2", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [5, "ETS Listening - Test 3", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [6, "ETS Reading - Test 3", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [7, "Review 1: ETS Listening & Reading Skills", "Tổng hợp từ vựng và collocations thường gặp trong ETS", "Cấu trúc ngữ pháp trọng tâm trong các bài ETS", "Làm bài luyện tổng hợp, phân tích lỗi sai và thảo luận chiến lược làm bài", "Củng cố kỹ năng nghe – đọc và chiến lược xử lý đề ETS hiệu quả"],
            [8, "ETS Listening - Test 4", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [9, "ETS Reading - Test 4", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [10, "ETS Listening - Test 5", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [11, "ETS Reading - Test 5", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [12, "ETS Listening - Test 6", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [13, "Mid-term Test (ETS Practice)", "", "", "Đánh giá năng lực làm bài ETS giữa khóa", ""],
            [14, "ETS Reading - Test 6", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [15, "ETS Listening - Test 7", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [16, "ETS Reading - Test 7", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [17, "ETS Listening - Test 8", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [18, "ETS Reading - Test 8", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [19, "ETS Listening - Test 9", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [20, "ETS Reading - Test 9", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [21, "Review 2: ETS Integrated Skills", "Tổng hợp từ vựng và collocations thường gặp trong ETS", "Cấu trúc ngữ pháp trọng tâm trong các bài ETS", "Làm bài luyện tổng hợp, phân tích lỗi sai và thảo luận chiến lược làm bài", "Củng cố kỹ năng nghe – đọc và chiến lược xử lý đề ETS hiệu quả"],
            [22, "ETS Listening - Test 10", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần listening của ETS", "Luyện tập đề ETS phần listening, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng listening và làm quen định dạng ETS thực tế"],
            [23, "ETS Reading - Test 10", "Từ vựng học thuật và chủ đề xuất hiện trong đề ETS", "Cấu trúc ngữ pháp thường gặp trong phần reading của ETS", "Luyện tập đề ETS phần reading, phân tích câu hỏi, và thảo luận đáp án", "Phát triển kỹ năng reading và làm quen định dạng ETS thực tế"],
            [24, "Final Test (ETS Full Simulation)", "", "", "Đánh giá năng lực tổng thể với đề ETS chuẩn cuối khóa", ""]
        ];

        foreach ($lessons_business6 as $lesson) {
            $business6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY BUSINESS 7 ==========
        $business7 = Subject::where('name', 'ICY Business 7')->first();

        $lessons_business7 = [
            [1, "Online Test - Test 1 - 100 câu đầu", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/224/start/"],
            [2, "Online Test - Test 1 - 100 câu sau", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/224/start/"],
            [3, "Online Test - Test 2 - 100 câu đầu", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/225/start/"],
            [4, "Online Test - Test 2 - 100 câu sau", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/225/start/"],
            [5, "Online Test - Test 3 - 100 câu đầu", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/226/start/"],
            [6, "Online Test - Test 3 - 100 câu sau", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/226/start/"],
            [7, "Review 1: Online Tests 1–3", "Tổng hợp từ vựng và cấu trúc thường gặp trong các đề Online", "Các điểm ngữ pháp trọng tâm cần củng cố", "Làm bài luyện tổng hợp, phân tích lỗi sai, thảo luận chiến lược làm bài", ""],
            [8, "Online Test - Test 4 - 100 câu đầu", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/227/start/"],
            [9, "Online Test - Test 4 - 100 câu sau", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/227/start/"],
            [10, "Online Test - Test 5 - 100 câu đầu", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/228/start/"],
            [11, "Online Test - Test 5 - 100 câu sau", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/228/start/"],
            [12, "Online Test - Test 6 - 100 câu đầu", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/1209/start/"],
            [13, "Online Test - Test 6 - 100 câu sau", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/1209/start/"],
            [14, "Mid-term Test (Online Practice)", "", "", "", ""],
            [15, "Online Test - Test 7 - 100 câu đầu", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/1214/start/"],
            [16, "Online Test - Test 7 - 100 câu sau", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/1214/start/"],
            [17, "Online Test - Test 8 - 100 câu đầu", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/1211/start/"],
            [18, "Online Test - Test 8 - 100 câu sau", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/1211/start/"],
            [19, "Online Test - Test 9 - 100 câu đầu", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/1212/start/"],
            [20, "Online Test - Test 9 - 100 câu sau", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/1212/start/"],
            [21, "Review 2: Online Tests 4–7", "Tổng hợp từ vựng và cấu trúc thường gặp trong các đề Online", "Các điểm ngữ pháp trọng tâm cần củng cố", "Làm bài luyện tổng hợp, phân tích lỗi sai, thảo luận chiến lược làm bài", ""],
            [22, "Online Test - Test 10 - 100 câu đầu", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/1213/start/"],
            [23, "Online Test - Test 10 - 100 câu sau", "Từ vựng và collocations xuất hiện trong đề Online", "Ngữ pháp và cấu trúc câu phổ biến trong bài kiểm tra Online", "Làm 50 câu luyện tập, phân tích đáp án và thảo luận chiến lược", "https://study4.com/tests/1213/start/"],
            [24, "Final Test (Online Full Simulation)", "", "", "", ""]
        ];

        foreach ($lessons_business7 as $lesson) {
            $business7->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY WONDERLAND 1 ==========
        $wonderland1 = Subject::where('name', 'ICY Wonderland 1')->first();

        $lessons_w1 = [
            [1, "Unit 1: Art Class - Lesson 1: School Supplies", "pencil, eraser, ruler, crayon, school bag", "Trace words sheet; find 3 items at home and say their names to parents.", "Name common school supplies accurately and respond to classroom instructions."],
            [2, "Unit 1: Art Class - Lesson 2: School Supplies (Expanding)", "scissors, glue, paint, paintbrush", "Cut-and-paste matching sheet; practice Q&A with family.", "Use question/answer patterns to identify objects in context."],
            [3, "Unit 1: Art Class - Lesson 3: Story", "review of Unit 1 vocabulary", "Retell story to parents using pictures (3 sentences).", "Understand the main idea of a short story and retell with prompts."],
            [4, "Unit 1: Art Class - Lesson 4: Phonics", "pen, bag, paint, ball", "Phonics worksheet; record 1 minute practicing p/b (optional).", "Recognize and produce target phonics sounds and letters p/b."],
            [5, "Unit 2: Let's Play - Lesson 1: Toys", "ball, doll, kite, car, robot", "Draw your favorite toy and label it in English.", "Identify and name common toys; use 'I have...' in simple utterances."],
            [6, "Unit 2: Let's Play - Lesson 2: Toys (Expanding)", "train, teddy bear, puzzle, yo-yo", "Ask family members about toy likes (in L1/L2 mix) and report next class.", "Express likes/dislikes about toys using a fixed pattern."],
            [7, "Unit 2: Let's Play - Lesson 3: Story", "review of Unit 2 vocabulary", "Comprehension mini-sheet (circle the toy).", "Follow and act a simple story related to toys."],
            [8, "Unit 2: Let's Play - Lesson 4: Phonics", "top, doll, train, dog", "Phonics practice sheet (t/d); read chant to parents.", "Differentiate and produce /t/ vs /d/; recognize letters t, d."],
            [9, "Check Up 1 (Units 1 & 2)", "All Unit 1–2 vocabulary & patterns", "Review any incorrect items at home.", "Consolidate Units 1–2 and diagnose areas for support."],
            [10, "Project Day: Art & Toys Poster", "review Units 1–2 key vocab", "Finish poster at home if needed; practice 2-sentence presentation.", "Integrate vocabulary in a simple product and present to peers."],
            [11, "Unit 3: Many Colors - Lesson 1: Colors", "red, blue, green, yellow, orange", "Color-by-code worksheet; practice color words at home.", "Recognize and produce basic color vocabulary."],
            [12, "Unit 3: Many Colors - Lesson 2: Colors (Expanding)", "purple, pink, black, white", "Complete mini-graph at home using family preferences.", "Express color preferences in short sentences."],
            [13, "Mid-term Test (Units 1 & 2)", "All Unit 1–2 vocabulary & patterns", "Review mistakes; short revision list sent to parents.", "Assess achievement halfway and plan support."],
            [14, "Unit 3: Many Colors - Lesson 3: Story", "review Unit 3 colors", "Draw your favorite scene and label colors.", "Understand and retell a simple color story."],
            [15, "Unit 3: Many Colors - Lesson 4: Phonics", "kite, car, game, green", "Phonics worksheet; practice chant at home.", "Differentiate and produce /k/ and /g/; link sounds to letters."],
            [16, "Unit 4: Counting - Lesson 1: Numbers", "one, two, three, four, five", "Count toys at home and tell a parent (1–5).", "Recognize, say, and count 1–5 accurately."],
            [17, "Unit 4: Counting - Lesson 2: Numbers (Expanding)", "six, seven, eight, nine, ten", "Worksheet practice 6–10; count items at home.", "Count and answer 'How many?' up to 10."],
            [18, "Unit 4: Counting - Lesson 3: Story", "review Unit 4 numbers", "Number sequencing mini-book to finish at home.", "Understand a simple counting narrative and link numerals to sets."],
            [19, "Unit 4: Counting - Lesson 4: Phonics", "six, seven, ten, two", "Phonics worksheet; practice counting chant.", "Relate sounds /s/, /t/ to print and words."],
            [20, "Check Up 2 (Units 3 & 4)", "All Unit 3–4 vocabulary & patterns", "Revise items marked with a sticker at home.", "Consolidate Units 3–4; prepare for final."],
            [21, "Storytelling Day: Class Book Mix", "mixed vocabulary from Units 1–4", "Finish sequencing mini-booklet at home.", "Build confidence in extended speaking and sequencing."],
            [22, "Phonics Challenge & Games", "phonics from Units 1–4", "Short phonics sheet; practice tricky pairs at home.", "Consolidate phonics learned across the course."],
            [23, "Final Review & Mock Test", "review all Units 1–4", "Light review at home; good sleep reminder.", "Be ready and confident for final assessment."],
            [24, "Final Test (Units 1–4)", "All vocabulary & patterns from Units 1–4", "Celebrate achievements; optional photo with certificate.", "Demonstrate end-of-course outcomes across four skills."],
        ];

        foreach ($lessons_w1 as $lesson) {
            $wonderland1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY WONDERLAND 2 ==========
        $wonderland2 = Subject::where('name', 'ICY Wonderland 2')->first();

        $lessons_w2 = [
            [1, "Unit 5: Animals - Lesson 1: Pets", "cat, dog, fish, bird, rabbit", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: pets in context."],
            [2, "Unit 5: Animals - Lesson 2: Farm Animals (Expanding)", "cow, sheep, goat, horse", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: farm animals (expanding) in context."],
            [3, "Unit 5: Animals - Lesson 3: Story", "review of Unit 5 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [4, "Unit 5: Animals - Lesson 4: Phonics", "cat, cow, pig, pen", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [5, "Unit 6: Lunch - Lesson 1: Food", "rice, soup, chicken, bread, milk", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: food in context."],
            [6, "Unit 6: Lunch - Lesson 2: Food (Expanding)", "juice, salad, noodles, cake", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: food (expanding) in context."],
            [7, "Unit 6: Lunch - Lesson 3: Story", "review of Unit 6 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [8, "Unit 6: Lunch - Lesson 4: Phonics", "juice, jam, soup, salad", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [9, "Check Up 3 (Units 5 & 6)", "All Unit 5-6 vocabulary", "Revise for midterm.", "Consolidate learning from Units 5-6."],
            [10, "Unit 7: Things to do - Lesson 1: Abilities", "run, jump, swim, climb, dance", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: abilities in context."],
            [11, "Unit 7: Things to do - Lesson 2: Abilities (Expanding)", "sing, draw, read, write", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: abilities (expanding) in context."],
            [12, "Unit 7: Things to do - Lesson 3: Story", "review of Unit 7 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [13, "Mid-term Test (Units 5 & 6)", "All Unit 5–6 vocabulary & patterns", "Review mistakes; short revision list sent to parents.", "Assess achievement halfway and plan support."],
            [14, "Unit 7: Things to do - Lesson 4: Phonics", "run, read, swim, sing", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [15, "Unit 8: My body - Lesson 1: My face", "eye, nose, mouth, ear, hair", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: my face in context."],
            [16, "Unit 8: My body - Lesson 2: My body (Expanding)", "arm, leg, hand, foot", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: my body (expanding) in context."],
            [17, "Unit 8: My body - Lesson 3: Story", "review of Unit 8 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [18, "Unit 8: My body - Lesson 4: Phonics", "hand, hair, leg, lip", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [19, "Check Up 4 (Units 7 & 8)", "All Unit 7-8 vocabulary", "Revise for final.", "Consolidate learning from Units 7-8."],
            [20, "Extra Review & Games 20", "Mixed vocabulary from Units 5-8", "Review at home any tricky words.", "Reinforce learning from all topics."],
            [21, "Extra Review & Games 21", "Mixed vocabulary from Units 5-8", "Review at home any tricky words.", "Reinforce learning from all topics."],
            [22, "Extra Review & Games 22", "Mixed vocabulary from Units 5-8", "Review at home any tricky words.", "Reinforce learning from all topics."],
            [23, "Final Review & Mock Test", "review all Units 5-8", "Light review at home; good sleep reminder.", "Be ready and confident for final assessment."],
            [24, "Final Test (Units 5–8)", "All vocabulary & patterns from Units 5–8", "Celebrate achievements; optional photo with certificate.", "Demonstrate end-of-course outcomes across four skills."],
        ];

        foreach ($lessons_w2 as $lesson) {
            $wonderland2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY WONDERLAND 3 ==========
        $wonderland3 = Subject::where('name', 'ICY Wonderland 3')->first();

        $lessons_w3 = [
            [1, "Unit 1: First Day - Lesson 1: School Supplies", "pencil, eraser, ruler, crayon, school bag", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: school supplies in context."],
            [2, "Unit 1: First Day - Lesson 2: School Supplies (Expanding)", "scissors, glue, paint, paintbrush", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: school supplies (expanding) in context."],
            [3, "Unit 1: First Day - Lesson 3: Story", "review of Unit 1 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [4, "Unit 1: First Day - Lesson 4: Phonics", "pen, bag, paint, ball", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [5, "Unit 2: Art Class - Lesson 1: Art Supplies", "paint, brush, paper, scissors, glue", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: art supplies in context."],
            [6, "Unit 2: Art Class - Lesson 2: Colors", "red, blue, green, yellow, orange", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: colors in context."],
            [7, "Unit 2: Art Class - Lesson 3: Story", "review of Unit 2 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [8, "Unit 2: Art Class - Lesson 4: Phonics", "red, blue, green, yellow", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [9, "Check Up 1 (Units 1 & 2)", "All Unit 1-2 vocabulary", "Revise for midterm.", "Consolidate learning from Units 1-2."],
            [10, "Unit 3: Birthday Party - Lesson 1: Numbers", "one, two, three, four, five", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: numbers in context."],
            [11, "Unit 3: Birthday Party - Lesson 2: Toys", "ball, doll, kite, car, robot", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: toys in context."],
            [12, "Unit 3: Birthday Party - Lesson 3: Story", "review of Unit 3 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [13, "Mid-term Test (Units 1 & 2)", "All Unit 1–2 vocabulary & patterns", "Review mistakes; short revision list sent to parents.", "Assess achievement halfway and plan support."],
            [14, "Unit 3: Birthday Party - Lesson 4: Phonics", "ball, bag, car, cake", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [15, "Unit 4: Home - Lesson 1: Family", "father, mother, brother, sister, baby", "Workbook exercises.", "Recognize and use vocabulary from lesson 1: family in context."],
            [16, "Unit 4: Home - Lesson 2: Food", "rice, soup, chicken, bread, milk", "Workbook exercises.", "Recognize and use vocabulary from lesson 2: food in context."],
            [17, "Unit 4: Home - Lesson 3: Story", "review of Unit 4 vocabulary", "Workbook exercises.", "Recognize and use vocabulary from lesson 3: story in context."],
            [18, "Unit 4: Home - Lesson 4: Phonics", "rice, read, soup, sister", "Workbook exercises.", "Recognize and use vocabulary from lesson 4: phonics in context."],
            [19, "Check Up 2 (Units 3 & 4)", "All Unit 3-4 vocabulary", "Revise for final.", "Consolidate learning from Units 3-4."],
            [20, "YLE Practice & Review 20", "Mixed vocabulary from Units 1-4", "Review at home for final.", "Prepare for YLE-style assessment."],
            [21, "YLE Practice & Review 21", "Mixed vocabulary from Units 1-4", "Review at home for final.", "Prepare for YLE-style assessment."],
            [22, "YLE Practice & Review 22", "Mixed vocabulary from Units 1-4", "Review at home for final.", "Prepare for YLE-style assessment."],
            [24, "Final Test (Units 1–4)", "All vocabulary & patterns from Units 1–4", "Celebrate achievements; optional photo with certificate.", "Demonstrate end-of-course outcomes across four skills."],
        ];

        foreach ($lessons_w3 as $lesson) {
            $wonderland3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY WONDERLAND 4 ==========
        $wonderland4 = Subject::where('name', 'ICY Wonderland 4')->first();

        $lessons_w4 = [
            [1, "Unit 5: The Park - Lesson 1: Nature", "flower, tree, rock, river, hill, lake", "Workbook pp. (Nature); find 2 items at home and tell parents in English.", "Name common things in a park and produce short 'I can see…' sentences."],
            [2, "Unit 5: The Park - Lesson 2: Playtime", "play soccer, jump rope, fly a kite, ride a bike", "Workbook practice; ask a family member what they can do.", "Express simple abilities in the playtime context."],
            [3, "Unit 5: The Park - Lesson 3: Story", "review of Unit 5 vocabulary", "Retell story to parents using pictures (3 sentences).", "Understand main idea of a short story and retell with prompts."],
            [4, "Unit 5: The Park - Lesson 4: Animals", "turtle, frog, spider, ant", "Workbook page (animals); review Q&A at home.", "Respond accurately to visibility questions about animals."],
            [5, "Unit 6: The Zoo - Lesson 1: Animals", "monkey, elephant, tiger, bear, kangaroo, penguin", "Workbook pp. (zoo scene).", "Use location questions/answers with common zoo animals."],
            [6, "Unit 6: The Zoo - Lesson 2: Animals (Expanding)", "snake, giraffe, lion, zebra", "Workbook exercises (plural forms).", "Ask and answer about animal locations using plural nouns."],
            [7, "Unit 6: The Zoo - Lesson 3: Story", "review of Unit 6 vocabulary", "Story mini-sheet: circle the correct picture.", "Show understanding of a narrative and polite expressions."],
            [8, "Unit 6: The Zoo - Lesson 4: Abilities", "run, hop, swim, walk", "Short worksheet (abilities).", "Answer ability questions about animals correctly."],
            [9, "Check Up 3 (Units 5 & 6)", "All Unit 5–6 vocabulary & patterns", "Review items marked with a sticker at home.", "Consolidate learning from Units 5–6 and diagnose needs."],
            [10, "Unit 7: Science Day - Lesson 1: My Body", "arm, hand, finger, leg, foot, toe", "Workbook pp. (body).", "Identify and name body parts; use singular/plural frames."],
            [11, "Unit 7: Science Day - Lesson 2: My Face", "eye, nose, mouth, ear", "Practice Q&A at home with family.", "Use confirmation questions about face parts."],
            [12, "Unit 7: Science Day - Lesson 3: Story", "review of Unit 7 vocabulary", "Draw your favorite scene and label it.", "Understand and retell a simple story using polite phrases."],
            [13, "Mid-term Test (Units 5 & 6)", "All Unit 5–6 vocabulary & patterns", "Review mistakes; short revision list to parents.", "Assess achievement halfway and plan support."],
            [14, "Unit 7: Science Day - Lesson 4: Healthy Habits", "wash my face, wash my hands, brush my hair, brush my teeth", "Worksheet; practice routine at home and tell parents.", "Use everyday habit phrases in simple sentences."],
            [15, "Unit 8: The Toy Store - Lesson 1: Adjectives", "old, new, big, small, long, short", "Workbook adjectives page.", "Use basic adjectives to describe objects accurately."],
            [16, "Unit 8: The Toy Store - Lesson 2: Adjectives (Expanding)", "fast, slow, noisy, quiet", "Practice Q&A with a family member (report next class).", "Ask and answer adjective questions correctly."],
            [17, "Unit 8: The Toy Store - Lesson 3: Story", "review of Unit 8 vocabulary", "Comprehension mini-sheet (circle the picture).", "Use polite requests in a familiar context."],
            [18, "Unit 8: The Toy Store - Lesson 4: Transportation", "bus, truck, train, boat", "Workbook transport page.", "Recognize and name common vehicles; use 'What’s this/that?'"],
            [19, "Check Up 4 (Units 7 & 8)", "All Unit 7–8 vocabulary", "Revise items marked with a sticker at home.", "Consolidate Units 7–8; prepare for YLE practice."],
            [20, "YLE Practice 1", "Mixed vocabulary from Units 5–8", "Review mistakes at home; re-practice tricky items.", "Familiarize with YLE task formats and strategies."],
            [21, "YLE Practice 2", "Mixed vocabulary from Units 5–8", "Short mixed-skill worksheet at home.", "Improve accuracy and fluency under time constraints."],
            [22, "YLE Practice 3", "Mixed vocabulary from Units 5–8", "Light review and rest advice.", "Be ready for final assessment tasks."],
            [23, "Final Review & Mock Test", "review all Units 5–8", "Light review at home; good sleep reminder.", "Be confident and ready for final assessment."],
            [24, "Final Test (Units 5–8)", "All vocabulary & patterns from Units 5–8", "Celebrate achievements; optional photo with certificate.", "Demonstrate end-of-course outcomes across four skills."],
        ];

        foreach ($lessons_w4 as $lesson) {
            $wonderland4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY WONDERLAND 5 ==========
        $wonderland5 = Subject::where('name', 'ICY Wonderland 5')->first();

        $lessons_w5 = [
            [1, "Unit 1: How We Feel - Lesson 1: Feelings", "happy, sad, hot, cold, hungry, thirsty", "Worksheet: Match words to pictures.", "Identify and say basic feelings in English."],
            [2, "Unit 1: How We Feel - Lesson 2: Feelings (Expanding)", "sick, tired, bored, excited", "Write 5 sentences using new feelings.", "Use expanded feelings vocabulary in short dialogues."],
            [3, "Unit 1: How We Feel - Lesson 3: Story", "hurt, leg, arm", "Draw and label your favorite story part.", "Comprehend and retell a short story."],
            [4, "Unit 1: How We Feel - Lesson 4: The Senses", "see, hear, smell, taste, touch", "Make a senses chart at home.", "Name and use sense verbs in context."],
            [5, "Unit 2: In Town - Lesson 1: Jobs", "doctor, nurse, teacher, student, pilot, cook", "Draw and label 3 jobs.", "Identify and name common jobs."],
            [6, "Unit 2: In Town - Lesson 2: Jobs (Expanding)", "police officer, firefighter, bus driver, soccer player", "Write 4 sentences about jobs.", "Use expanded jobs vocabulary in dialogues."],
            [7, "Unit 2: In Town - Lesson 3: Story", "excuse me, borrow, phone", "Draw your favorite story scene.", "Comprehend and retell a short story."],
            [8, "Unit 2: In Town - Lesson 4: Places", "hospital, school, home, restaurant", "Write 4 sentences about places.", "Identify and talk about places in town."],
            [9, "Check Up 1 (Unit 1 + Unit 2)", "All vocabulary from Units 1-2", "Workbook review pages.", "Review and consolidate Units 1-2."],
            [10, "Unit 3: Things to Eat - Lesson 1: Food", "soup, salad, spaghetti, french fries, steak, eggs", "Draw and label 3 foods.", "Identify and name common foods."],
            [11, "Unit 3: Things to Eat - Lesson 2: Fruit", "apple, banana, orange, peach", "Write 4 fruit sentences.", "Use fruit vocabulary in sentences."],
            [12, "Unit 3: Things to Eat - Lesson 3: Story", "apple, please, thank you", "Draw your favorite part of story.", "Comprehend and act out short story."],
            [13, "Mid-term Test", "All vocabulary Units 1-3", "Study all Units 1-3.", "Assess mid-term learning outcomes."],
            [14, "Unit 3: Things to Eat - Lesson 4: Dairy Products", "milk, yogurt, cheese, butter", "Write 3 sentences about dairy.", "Identify and talk about dairy products."],
            [15, "Unit 4: Things to Wear - Lesson 1: Clothes", "shirt, dress, skirt, pants, socks, shoes", "Draw and label 3 clothes.", "Identify and name common clothes."],
            [16, "Unit 4: Things to Wear - Lesson 2: Clothes (Expanding)", "cap, T-shirt, shorts, sneakers", "Write 4 sentences about clothes.", "Use expanded clothes vocabulary in dialogues."],
            [17, "Unit 4: Things to Wear - Lesson 3: Story", "hat, coat, sweater, boots", "Draw your favorite part of story.", "Comprehend and act out short story."],
            [18, "Unit 4: Things to Wear - Lesson 4: Clothes", "hat, coat, sweater, boots", "Write 3 clothes sentences.", "Identify and talk about clothes."],
            [19, "Check Up 2 (Unit 3 + Unit 4)", "All vocabulary from Units 3-4", "Workbook review pages.", "Review and consolidate Units 3-4."],
            [20, "YLE Practice 1", "Vocabulary from Units 1-4", "Review YLE vocabulary.", "Prepare for YLE Starters test."],
            [21, "YLE Practice 2", "Vocabulary from Units 1-4", "Review YLE vocabulary.", "Prepare for YLE Starters test."],
            [22, "YLE Review", "Vocabulary from Units 1-4", "Revise vocabulary and skills.", "Be ready for YLE Starters test."],
            [23, "YLE Speaking Practice", "Vocabulary from Units 1-4", "Practice speaking daily.", "Speak confidently in YLE test."],
            [24, "Final Test", "All vocabulary Units 1-4", "Study all Units 1-4.", "Assess final learning outcomes."],
        ];

        foreach ($lessons_w5 as $lesson) {
            $wonderland5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY WONDERLAND 6 ==========
        $wonderland6 = Subject::where('name', 'ICY Wonderland 6')->first();

        $lessons_w6 = [
            [1, "Unit 5: Things to Do - Lesson 1: Actions", "read, write, draw, talk, sing, dance", "Practice writing action verbs at home", "Recognize and use basic action verbs in context"],
            [2, "Unit 5: Things to Do - Lesson 2: Actions (Expanding)", "eat, drink, sleep, play", "Complete action-matching worksheet", "Use extended action verbs in daily conversation"],
            [3, "Unit 5: Things to Do - Lesson 3: Story", "story vocabulary from 'Let's Play!'", "Draw favorite scene from story", "Understand and retell a simple story"],
            [4, "Unit 5: Things to Do - Lesson 4: Activities", "play the guitar, listen to music, watch TV, do homework", "Practice describing own activities at home", "Use activity vocabulary to describe daily routines"],

            [5, "Unit 6: Home - Lesson 1: Things at Home", "bed, bookshelf, table, sofa, clock, computer", "Draw and label 3 items from home", "Identify and name common household objects"],
            [6, "Unit 6: Home - Lesson 2: Rooms", "bedroom, bathroom, living room, kitchen", "Describe your favorite room at home", "Name and describe rooms in a house"],
            [7, "Unit 6: Home - Lesson 3: Story", "story vocabulary from 'Surprise!'", "Write one sentence about the story", "Understand and retell a short story"],
            [8, "Unit 6: Home - Lesson 4: Numbers (0-100)", "numbers 0-100", "Count and record items at home", "Count and use numbers in conversation"],

            [9, "Check Up 1 (Unit 5 & Unit 6)", "review vocabulary from Units 5 & 6", "Review vocabulary at home", "Recall and use vocabulary from Units 5 & 6"],

            [10, "Unit 7: My Day - Lesson 1: Time", "one o’clock, one fifteen, one thirty, one forty-five, two o’clock", "Practice telling time at home", "Tell and ask about time accurately"],
            [11, "Unit 7: My Day - Lesson 2: Meals", "breakfast, lunch, snack, dinner", "Draw and label meals", "Use vocabulary to talk about meals"],
            [12, "Unit 7: My Day - Lesson 3: Story", "story vocabulary from 'Time for Bed'", "Write a sentence about story", "Understand and retell a bedtime story"],
            [13, "Mid-term Test", "-", "-", "Assess progress in Units 5-7"],
            [14, "Unit 7: My Day - Lesson 4: Daily Routine", "wake up, go to school, come home, go to bed", "Write daily routine", "Describe and discuss daily routines"],

            [15, "Unit 8: My Week - Lesson 1: Subjects", "science, art, math, PE, music, social studies", "Draw and label favorite subject", "Identify and discuss school subjects"],
            [16, "Unit 8: My Week - Lesson 2: Classes", "karate class, dance class, swimming class, English class", "Write own class schedule", "Use class vocabulary to talk about schedule"],
            [17, "Unit 8: My Week - Lesson 3: Story", "story vocabulary from 'A Friend'", "Draw favorite part of story", "Understand and retell a friendship story"],
            [18, "Unit 8: My Week - Lesson 4: Countries", "Brazil, Canada, Egypt, South Korea", "Color and label flags", "Identify countries and say where people are from"],

            [19, "Check Up 2 (Unit 7 & Unit 8)", "review vocabulary from Units 7 & 8", "Review vocabulary", "Recall and use vocabulary from Units 7 & 8"],
            [20, "YLE Practice 1", "-", "-", "Familiarize with YLE format"],
            [21, "YLE Practice 2", "-", "-", "Familiarize with YLE format"],
            [22, "Revision", "-", "-", "Prepare for final test"],
            [23, "Speaking & Listening Practice", "-", "-", "Improve fluency and listening comprehension"],
            [24, "Final Test", "-", "-", "Assess overall course outcomes"],
        ];

        foreach ($lessons_w6 as $lesson) {
            $wonderland6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'assignment'    => $lesson[3],
                'CLO'           => $lesson[4],
            ]);
        }

        // ========== ICY HIGHSCHOOL 1 ==========
        $highschool1 = Subject::where('name', 'ICY Highschool 1')->first();

        $lessons_hs1 = [
            [1, "Chuyên đề 1: Ngữ âm – Phân biệt âm cơ bản, luyện phát âm", "Phonemes, Vowel, Consonant", "Phonetics rules", "Luyện phát âm IPA", "Phân biệt ngữ âm"],
            [2, "Chuyên đề 2: Trọng âm – Quy tắc trọng âm cơ bản & bài tập", "Stress rules, Word stress", "Stress placement rules", "Làm bài tập trọng âm", "Hiểu trọng âm"],
            [3, "Chuyên đề 3: Verb Tenses – Ôn tập thì cơ bản", "Simple tenses, Continuous, Perfect", "Verb tense forms", "Viết đoạn văn sử dụng thì cơ bản", "Nắm vững thì cơ bản"],
            [4, "Chuyên đề 3: Verb Tenses – Bài tập ứng dụng nâng cao", "Advanced tense markers", "Usage in contexts", "Bài tập chia thì nâng cao", "Ứng dụng thì nâng cao"],
            [5, "Chuyên đề 4: Sự phối hợp thì – Lý thuyết & ví dụ minh họa", "Sequence of tenses", "Tense agreement", "Viết lại câu với đúng thì", "Hiểu sự phối hợp thì"],
            [6, "Chuyên đề 4: Sự phối hợp thì – Bài tập thực hành", "Reported tense shift", "Backshifting rules", "Bài tập chuyển đổi thì", "Ứng dụng phối hợp thì"],
            [7, "Chuyên đề 5: Sự hòa hợp CN & ĐT – Quy tắc cơ bản", "Subject-verb agreement", "Singular vs plural verb", "Chọn động từ đúng", "Nắm vững SVA"],
            [8, "Chuyên đề 5: Sự hòa hợp CN & ĐT – Bài tập tổng hợp", "Special cases", "Indefinite pronouns", "Sửa lỗi SVA", "Sửa lỗi SVA"],
            [9, "Chuyên đề 6: Động từ khuyết thiếu – Các loại modal verbs", "Modal verbs (can, may, must)", "Modal verb structures", "Hoàn thành câu với modals", "Sử dụng modal verbs"],
            [10, "Chuyên đề 6: Động từ khuyết thiếu – Bài tập ứng dụng", "Obligation & advice modals", "Usage of modals", "Viết đoạn văn sử dụng modals", "Ứng dụng modal verbs"],
            [11, "Chuyên đề 7: Cụm động từ – Cách dùng & ví dụ", "Phrasal verbs", "Phrasal verb structures", "Danh sách phrasal verbs", "Nắm vững cụm động từ"],
            [12, "Chuyên đề 7: Cụm động từ – Bài tập thực hành", "Common phrasal verbs", "Common phrasal verb usage", "Đặt câu với phrasal verbs", "Thực hành phrasal verbs"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá năng lực giữa kỳ"],
            [14, "Chuyên đề 8: Thức giả định – Lý thuyết & ví dụ", "Subjunctive, Wish clauses", "Subjunctive forms", "Viết câu giả định", "Hiểu thức giả định"],
            [15, "Chuyên đề 8: Thức giả định – Bài tập ứng dụng", "If only, It's time", "Hypothetical expressions", "Bài tập if only/wish", "Ứng dụng thức giả định"],
            [16, "Chuyên đề 9: Danh động từ – Cách dùng & cấu trúc", "Gerund, Gerund phrases", "Gerund usage", "Viết câu với gerund", "Hiểu danh động từ"],
            [17, "Chuyên đề 9: Danh động từ – Bài tập thực hành", "Gerund vs Infinitive", "Gerund vs Infinitive", "Phân biệt gerund/infinitive", "Ứng dụng gerund"],
            [18, "Chuyên đề 10: Câu hỏi đuôi – Lý thuyết & ví dụ", "Question tags", "Tag question rules", "Đặt câu hỏi đuôi", "Hiểu câu hỏi đuôi"],
            [19, "Chuyên đề 10: Câu hỏi đuôi – Bài tập luyện tập", "Negative & positive tags", "Tag question exceptions", "Viết đoạn hội thoại", "Thực hành câu hỏi đuôi"],
            [20, "Chuyên đề 11: So sánh – Các loại so sánh", "Comparatives, Superlatives", "Comparative structures", "Viết câu so sánh", "Hiểu so sánh"],
            [21, "Chuyên đề 11: So sánh – Bài tập thực hành", "So sánh nâng cao", "Advanced comparisons", "Bài tập nâng cao", "Ứng dụng so sánh nâng cao"],
            [22, "Chuyên đề 12: Trật tự của tính từ – Quy tắc & ví dụ", "Adjective order", "Adjective order rules", "Sắp xếp tính từ", "Hiểu trật tự tính từ"],
            [23, "Chuyên đề 13: Mạo từ – Cách dùng a/an/the", "Articles (a/an/the)", "Article usage rules", "Điền mạo từ đúng", "Sử dụng mạo từ đúng"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá năng lực cuối kỳ"],
        ];

        foreach ($lessons_hs1 as $lesson) {
            $highschool1->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY HIGHSCHOOL 2 ==========
        $highschool2 = Subject::where('name', 'ICY Highschool 2')->first();

        $lessons_hs2 = [
            [1, "Chuyên đề 14: Cấu tạo từ – Lý thuyết & ví dụ", "Prefixes, Suffixes", "Word formation rules", "Viết từ mới bằng tiền tố/hậu tố", "Hiểu cấu tạo từ"],
            [2, "Chuyên đề 14: Cấu tạo từ – Bài tập ứng dụng", "Word formation", "Suffixes & prefixes", "Làm bài tập word formation", "Ứng dụng word formation"],
            [3, "Chuyên đề 15: Từ chỉ số lượng – Lý thuyết & ví dụ", "Quantifiers, Much/Many", "Quantifier rules", "Điền từ chỉ số lượng", "Hiểu từ chỉ số lượng"],
            [4, "Chuyên đề 15: Từ chỉ số lượng – Bài tập thực hành", "Few/Little", "Practice with quantifiers", "Viết câu với few/little", "Ứng dụng trong bài tập"],
            [5, "Chuyên đề 16: Giới từ – Các loại giới từ cơ bản", "Prepositions of place/time", "Preposition usage", "Đặt câu với giới từ", "Hiểu giới từ"],
            [6, "Chuyên đề 16: Giới từ – Bài tập luyện tập", "Prepositional phrases", "Prepositional structures", "Hoàn thành bài tập giới từ", "Sử dụng giới từ đúng"],
            [7, "Chuyên đề 17: Liên từ – Lý thuyết & ví dụ", "Conjunctions: and, but, or", "Conjunction rules", "Viết câu với liên từ", "Hiểu liên từ"],
            [8, "Chuyên đề 17: Liên từ – Bài tập thực hành", "Although, unless", "Advanced conjunctions", "Làm bài tập liên từ", "Sử dụng liên từ đúng"],
            [9, "Chuyên đề 18: Câu bị động – Các dạng bị động cơ bản", "Passive voice", "Passive voice forms", "Chuyển câu sang bị động", "Hiểu câu bị động"],
            [10, "Chuyên đề 18: Câu bị động – Bài tập ứng dụng", "Advanced passives", "Usage of passives", "Viết đoạn văn bị động", "Ứng dụng bị động"],
            [11, "Chuyên đề 19: Câu điều kiện – Lý thuyết & ví dụ", "Conditionals (0,1,2)", "Conditional sentence rules", "Viết câu điều kiện", "Hiểu câu điều kiện"],
            [12, "Chuyên đề 19: Câu điều kiện – Bài tập luyện tập", "Conditionals (3, mixed)", "Mixed conditionals", "Làm bài tập điều kiện nâng cao", "Ứng dụng điều kiện nâng cao"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Chuyên đề 20: Câu trực tiếp, gián tiếp – Nguyên tắc chuyển đổi", "Direct speech", "Rules for reported speech", "Chuyển câu trực tiếp thành gián tiếp", "Hiểu câu trực tiếp/gián tiếp"],
            [15, "Chuyên đề 20: Câu trực tiếp, gián tiếp – Bài tập ứng dụng", "Indirect speech", "Reported questions & commands", "Bài tập reported speech", "Ứng dụng reported speech"],
            [16, "Chuyên đề 21: Đảo ngữ – Lý thuyết & ví dụ", "Inversion structures", "Inversion rules", "Viết câu đảo ngữ", "Hiểu đảo ngữ"],
            [17, "Chuyên đề 21: Đảo ngữ – Bài tập thực hành", "Negative inversion", "Practice inversion", "Bài tập đảo ngữ", "Ứng dụng đảo ngữ"],
            [18, "Chuyên đề 22: Mệnh đề quan hệ – Lý thuyết & ví dụ", "Relative clauses", "Relative clause rules", "Viết câu với mệnh đề quan hệ", "Hiểu mệnh đề quan hệ"],
            [19, "Chuyên đề 22: Mệnh đề quan hệ – Bài tập ứng dụng", "Defining & non-defining", "Reduced relative clauses", "Bài tập rút gọn mệnh đề quan hệ", "Ứng dụng mệnh đề quan hệ"],
            [20, "Chuyên đề 23: Thành ngữ – Các thành ngữ phổ biến", "Idioms", "Idiomatic usage", "Viết câu với idioms", "Hiểu thành ngữ"],
            [21, "Chuyên đề 23: Thành ngữ – Bài tập luyện tập", "Idiomatic phrases", "Idioms in sentences", "Bài tập idioms", "Ứng dụng thành ngữ"],
            [22, "Chuyên đề 24: Cụm từ cố định – Tổng hợp & bài tập", "Fixed expressions", "Fixed expression rules", "Viết câu với cụm từ cố định", "Hiểu cụm từ cố định"],
            [23, "Chuyên đề 25: Cấu trúc thông dụng – Tổng hợp & bài tập", "Common structures", "Common structures", "Viết đoạn văn dùng cấu trúc thông dụng", "Ứng dụng cấu trúc thông dụng"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_hs2 as $lesson) {
            $highschool2->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY HIGHSCHOOL 3 ==========
        $highschool3 = Subject::where('name', 'ICY Highschool 3')->first();

        $lessons_hs3 = [
            [1, "Test 1", "Vocab Test 1", "Grammar Test 1", "Làm Test 1", "Hoàn thành Test 1"],
            [2, "Test 2", "Vocab Test 2", "Grammar Test 2", "Làm Test 2", "Hoàn thành Test 2"],
            [3, "Test 3", "Vocab Test 3", "Grammar Test 3", "Làm Test 3", "Hoàn thành Test 3"],
            [4, "Review Test 1–3", "Review vocab 1–3", "Review grammar 1–3", "Ôn tập Test 1–3", "Củng cố kiến thức Test 1–3"],
            [5, "Test 4", "Vocab Test 4", "Grammar Test 4", "Làm Test 4", "Hoàn thành Test 4"],
            [6, "Test 5", "Vocab Test 5", "Grammar Test 5", "Làm Test 5", "Hoàn thành Test 5"],
            [7, "Test 6", "Vocab Test 6", "Grammar Test 6", "Làm Test 6", "Hoàn thành Test 6"],
            [8, "Review Test 4–6", "Review vocab 4–6", "Review grammar 4–6", "Ôn tập Test 4–6", "Củng cố kiến thức Test 4–6"],
            [9, "Test 7", "Vocab Test 7", "Grammar Test 7", "Làm Test 7", "Hoàn thành Test 7"],
            [10, "Test 8", "Vocab Test 8", "Grammar Test 8", "Làm Test 8", "Hoàn thành Test 8"],
            [11, "Test 9", "Vocab Test 9", "Grammar Test 9", "Làm Test 9", "Hoàn thành Test 9"],
            [12, "Review Test 7–9", "Review vocab 7–9", "Review grammar 7–9", "Ôn tập Test 7–9", "Củng cố kiến thức Test 7–9"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Test 10", "Vocab Test 10", "Grammar Test 10", "Làm Test 10", "Hoàn thành Test 10"],
            [15, "Test 11", "Vocab Test 11", "Grammar Test 11", "Làm Test 11", "Hoàn thành Test 11"],
            [16, "Test 12", "Vocab Test 12", "Grammar Test 12", "Làm Test 12", "Hoàn thành Test 12"],
            [17, "Review Test 10–12", "Review vocab 10–12", "Review grammar 10–12", "Ôn tập Test 10–12", "Củng cố kiến thức Test 10–12"],
            [18, "Test 13", "Vocab Test 13", "Grammar Test 13", "Làm Test 13", "Hoàn thành Test 13"],
            [19, "Test 14", "Vocab Test 14", "Grammar Test 14", "Làm Test 14", "Hoàn thành Test 14"],
            [20, "Test 15", "Vocab Test 15", "Grammar Test 15", "Làm Test 15", "Hoàn thành Test 15"],
            [21, "Review Test 13–15", "Review vocab 13–15", "Review grammar 13–15", "Ôn tập Test 13–15", "Củng cố kiến thức Test 13–15"],
            [22, "Practice Test 1", "Practice vocab 1", "Practice grammar 1", "Thực hành đề 1", "Thực hành tổng hợp 1"],
            [23, "Practice Test 2", "Practice vocab 2", "Practice grammar 2", "Thực hành đề 2", "Thực hành tổng hợp 2"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_hs3 as $lesson) {
            $highschool3->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY HIGHSCHOOL 4 ==========
        $highschool4 = Subject::where('name', 'ICY Highschool 4')->first();

        $lessons_hs4 = [
            [1, "Test 16", "Vocab Test 16", "Grammar Test 16", "Làm Test 16", "Hoàn thành Test 16"],
            [2, "Test 17", "Vocab Test 17", "Grammar Test 17", "Làm Test 17", "Hoàn thành Test 17"],
            [3, "Test 18", "Vocab Test 18", "Grammar Test 18", "Làm Test 18", "Hoàn thành Test 18"],
            [4, "Review Test 16–18", "Review vocab 16–18", "Review grammar 16–18", "Ôn tập Test 16–18", "Củng cố kiến thức Test 16–18"],
            [5, "Test 19", "Vocab Test 19", "Grammar Test 19", "Làm Test 19", "Hoàn thành Test 19"],
            [6, "Test 20", "Vocab Test 20", "Grammar Test 20", "Làm Test 20", "Hoàn thành Test 20"],
            [7, "Test 21", "Vocab Test 21", "Grammar Test 21", "Làm Test 21", "Hoàn thành Test 21"],
            [8, "Review Test 19–21", "Review vocab 19–21", "Review grammar 19–21", "Ôn tập Test 19–21", "Củng cố kiến thức Test 19–21"],
            [9, "Test 22", "Vocab Test 22", "Grammar Test 22", "Làm Test 22", "Hoàn thành Test 22"],
            [10, "Test 23", "Vocab Test 23", "Grammar Test 23", "Làm Test 23", "Hoàn thành Test 23"],
            [11, "Test 24", "Vocab Test 24", "Grammar Test 24", "Làm Test 24", "Hoàn thành Test 24"],
            [12, "Review Test 22–24", "Review vocab 22–24", "Review grammar 22–24", "Ôn tập Test 22–24", "Củng cố kiến thức Test 22–24"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Test 25", "Vocab Test 25", "Grammar Test 25", "Làm Test 25", "Hoàn thành Test 25"],
            [15, "Test 26", "Vocab Test 26", "Grammar Test 26", "Làm Test 26", "Hoàn thành Test 26"],
            [16, "Test 27", "Vocab Test 27", "Grammar Test 27", "Làm Test 27", "Hoàn thành Test 27"],
            [17, "Review Test 25–27", "Review vocab 25–27", "Review grammar 25–27", "Ôn tập Test 25–27", "Củng cố kiến thức Test 25–27"],
            [18, "Test 28", "Vocab Test 28", "Grammar Test 28", "Làm Test 28", "Hoàn thành Test 28"],
            [19, "Test 29", "Vocab Test 29", "Grammar Test 29", "Làm Test 29", "Hoàn thành Test 29"],
            [20, "Test 30", "Vocab Test 30", "Grammar Test 30", "Làm Test 30", "Hoàn thành Test 30"],
            [21, "Review Test 28–30", "Review vocab 28–30", "Review grammar 28–30", "Ôn tập Test 28–30", "Củng cố kiến thức Test 28–30"],
            [22, "Practice Test 1", "Practice vocab 1", "Practice grammar 1", "Thực hành đề 1", "Thực hành tổng hợp 1"],
            [23, "Practice Test 2", "Practice vocab 2", "Practice grammar 2", "Thực hành đề 2", "Thực hành tổng hợp 2"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_hs4 as $lesson) {
            $highschool4->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY HIGHSCHOOL 5 ==========
        $highschool5 = Subject::where('name', 'ICY Highschool 5')->first();

        $lessons_hs5 = [
            [1,  "Test 31 - Mai Lan Hương", "Test vocabulary (Mai Lan Hương)", "Test grammar (Mai Lan Hương)", "Bài tập Test (Mai Lan Hương)", "Hoàn thành Test (Mai Lan Hương)"],
            [2,  "Test 32 - Mai Lan Hương", "Test vocabulary (Mai Lan Hương)", "Test grammar (Mai Lan Hương)", "Bài tập Test (Mai Lan Hương)", "Hoàn thành Test (Mai Lan Hương)"],
            [3,  "Test 33 - Mai Lan Hương", "Test vocabulary (Mai Lan Hương)", "Test grammar (Mai Lan Hương)", "Bài tập Test (Mai Lan Hương)", "Hoàn thành Test (Mai Lan Hương)"],
            [4,  "Test 34 - Mai Lan Hương", "Test vocabulary (Mai Lan Hương)", "Test grammar (Mai Lan Hương)", "Bài tập Test (Mai Lan Hương)", "Hoàn thành Test (Mai Lan Hương)"],
            [5,  "Test 35 - Mai Lan Hương", "Test vocabulary (Mai Lan Hương)", "Test grammar (Mai Lan Hương)", "Bài tập Test (Mai Lan Hương)", "Hoàn thành Test (Mai Lan Hương)"],
            [6,  "Mock Test 1 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [7,  "Mock Test 2 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [8,  "Mock Test 3 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [9,  "Mock Test 4 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [10, "Mock Test 5 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [11, "Mock Test 6 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [12, "Mock Test 7 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Mock Test 8 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [15, "Mock Test 9 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [16, "Mock Test 10 - Giáo trình ICY (Writing)", "Reading vocab practice (Mock ICY)", "Reading grammar practice (Mock ICY)", "Bài tập chuyên sâu Reading (Mock ICY)", "Phát triển kỹ năng đọc hiểu chuyên sâu (Mock ICY)"],
            [17, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
            [18, "Mock Test 11 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [19, "Mock Test 12 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [20, "Mock Test 13 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [21, "Mock Test 14 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [22, "Mock Test 15 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [23, "Mock Test 16 - Giáo trình ICY (Writing)", "Writing vocab practice (Mock ICY)", "Writing grammar practice (Mock ICY)", "Bài tập chuyên sâu Writing (Mock ICY)", "Phát triển kỹ năng viết học thuật chuyên sâu (Mock ICY)"],
            [24, "FinalTest", "Final vocabulary", "Final review grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_hs5 as $lesson) {
            $highschool5->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY HIGHSCHOOL 6 ==========
        $highschool6 = Subject::where('name', 'ICY Highschool 6')->first();

        $lessons_highschool6 = [
            [1,  "Đề thi thật 2017 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [2,  "Đề thi thật 2017 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [3,  "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [4,  "Đề thi thật 2018 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [5,  "Đề thi thật 2018 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [6,  "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [7,  "Đề thi thật 2019 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [8,  "Đề thi thật 2019 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [9,  "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [10, "Đề thi thật 2020 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [11, "Đề thi thật 2020 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [12, "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Đề thi thật 2021 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [15, "Đề thi thật 2021 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [16, "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [17, "Đề thi thật 2022 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [18, "Đề thi thật 2022 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [19, "Review", "Review Vocabulary", "Review Grammar", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [20, "Đề thi thật 2023 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [21, "Đề thi thật 2023 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [22, "Đề thi thật 2024 - General + Reading", "Exam vocabulary (General + Reading)", "Grammar for General + Reading", "Làm phần General + Reading của đề thi", "Hoàn thành phần General + Reading của đề thi thật"],
            [23, "Đề thi thật 2024 - Writing", "Exam vocabulary (Writing)", "Grammar for Writing tasks", "Làm phần Writing của đề thi", "Hoàn thành phần Writing của đề thi thật"],
            [24, "Final Test", "Final Review vocabulary", "Final review grammar", "Final Review exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_highschool6 as $lesson) {
            $highschool6->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY UNICOLLEGE 1 ==========
        $subject = Subject::where('name', 'ICY UNICOLLEGE 1')->first();

        $lessons = [
            [1,  "Chuyên đề 1: Ngữ âm – Phân biệt âm cơ bản, luyện phát âm", "Phonemes, Vowel, Consonant", "Phonetics rules", "Luyện phát âm IPA", "Phân biệt ngữ âm"],
            [2,  "Chuyên đề 2: Trọng âm – Quy tắc trọng âm cơ bản & bài tập", "Stress rules, Word stress", "Stress placement rules", "Làm bài tập trọng âm", "Hiểu trọng âm"],
            [3,  "Chuyên đề 3: Verb Tenses – Ôn tập thì cơ bản", "Simple tenses, Continuous, Perfect", "Verb tense forms", "Viết đoạn văn sử dụng thì cơ bản", "Nắm vững thì cơ bản"],
            [4,  "Chuyên đề 3: Verb Tenses – Bài tập ứng dụng nâng cao", "Advanced tense markers", "Usage in contexts", "Bài tập chia thì nâng cao", "Ứng dụng thì nâng cao"],
            [5,  "Chuyên đề 4: Sự phối hợp thì – Lý thuyết & ví dụ minh họa", "Sequence of tenses", "Tense agreement", "Viết lại câu với đúng thì", "Hiểu sự phối hợp thì"],
            [6,  "Chuyên đề 4: Sự phối hợp thì – Bài tập thực hành", "Reported tense shift", "Backshifting rules", "Bài tập chuyển đổi thì", "Ứng dụng phối hợp thì"],
            [7,  "Chuyên đề 5: Sự hòa hợp CN & ĐT – Quy tắc cơ bản", "Subject-verb agreement", "Singular vs plural verb", "Chọn động từ đúng", "Nắm vững SVA"],
            [8,  "Chuyên đề 5: Sự hòa hợp CN & ĐT – Bài tập tổng hợp", "Special cases", "Indefinite pronouns", "Sửa lỗi SVA", "Sửa lỗi SVA"],
            [9,  "Chuyên đề 6: Động từ khuyết thiếu – Các loại modal verbs", "Modal verbs (can, may, must)", "Modal verb structures", "Hoàn thành câu với modals", "Sử dụng modal verbs"],
            [10, "Chuyên đề 6: Động từ khuyết thiếu – Bài tập ứng dụng", "Obligation & advice modals", "Usage of modals", "Viết đoạn văn sử dụng modals", "Ứng dụng modal verbs"],
            [11, "Chuyên đề 7: Cụm động từ – Cách dùng & ví dụ", "Phrasal verbs", "Phrasal verb structures", "Danh sách phrasal verbs", "Nắm vững cụm động từ"],
            [12, "Chuyên đề 7: Cụm động từ – Bài tập thực hành", "Common phrasal verbs", "Common phrasal verb usage", "Đặt câu với phrasal verbs", "Thực hành phrasal verbs"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá năng lực giữa kỳ"],
            [14, "Chuyên đề 8: Thức giả định – Lý thuyết & ví dụ", "Subjunctive, Wish clauses", "Subjunctive forms", "Viết câu giả định", "Hiểu thức giả định"],
            [15, "Chuyên đề 8: Thức giả định – Bài tập ứng dụng", "If only, It's time", "Hypothetical expressions", "Bài tập if only/wish", "Ứng dụng thức giả định"],
            [16, "Chuyên đề 9: Danh động từ – Cách dùng & cấu trúc", "Gerund, Gerund phrases", "Gerund usage", "Viết câu với gerund", "Hiểu danh động từ"],
            [17, "Chuyên đề 9: Danh động từ – Bài tập thực hành", "Gerund vs Infinitive", "Gerund vs Infinitive", "Phân biệt gerund/infinitive", "Ứng dụng gerund"],
            [18, "Chuyên đề 10: Câu hỏi đuôi – Lý thuyết & ví dụ", "Question tags", "Tag question rules", "Đặt câu hỏi đuôi", "Hiểu câu hỏi đuôi"],
            [19, "Chuyên đề 10: Câu hỏi đuôi – Bài tập luyện tập", "Negative & positive tags", "Tag question exceptions", "Viết đoạn hội thoại", "Thực hành câu hỏi đuôi"],
            [20, "Chuyên đề 11: So sánh – Các loại so sánh", "Comparatives, Superlatives", "Comparative structures", "Viết câu so sánh", "Hiểu so sánh"],
            [21, "Chuyên đề 11: So sánh – Bài tập thực hành", "So sánh nâng cao", "Advanced comparisons", "Bài tập nâng cao", "Ứng dụng so sánh nâng cao"],
            [22, "Chuyên đề 12: Trật tự của tính từ – Quy tắc & ví dụ", "Adjective order", "Adjective order rules", "Sắp xếp tính từ", "Hiểu trật tự tính từ"],
            [23, "Chuyên đề 13: Mạo từ – Cách dùng a/an/the", "Articles (a/an/the)", "Article usage rules", "Điền mạo từ đúng", "Sử dụng mạo từ đúng"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá năng lực cuối kỳ"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY UNICOLLEGE 2 ==========
        $subject = Subject::where('name', 'ICY UNICOLLEGE 2')->first();

        $lessons = [
            [1,  "Chuyên đề 14: Cấu tạo từ – Lý thuyết & ví dụ", "Prefixes, Suffixes", "Word formation rules", "Viết từ mới bằng tiền tố/hậu tố", "Hiểu cấu tạo từ"],
            [2,  "Chuyên đề 14: Cấu tạo từ – Bài tập ứng dụng", "Word formation", "Suffixes & prefixes", "Làm bài tập word formation", "Ứng dụng word formation"],
            [3,  "Chuyên đề 15: Từ chỉ số lượng – Lý thuyết & ví dụ", "Quantifiers, Much/Many", "Quantifier rules", "Điền từ chỉ số lượng", "Hiểu từ chỉ số lượng"],
            [4,  "Chuyên đề 15: Từ chỉ số lượng – Bài tập thực hành", "Few/Little", "Practice with quantifiers", "Viết câu với few/little", "Ứng dụng trong bài tập"],
            [5,  "Chuyên đề 16: Giới từ – Các loại giới từ cơ bản", "Prepositions of place/time", "Preposition usage", "Đặt câu với giới từ", "Hiểu giới từ"],
            [6,  "Chuyên đề 16: Giới từ – Bài tập luyện tập", "Prepositional phrases", "Prepositional structures", "Hoàn thành bài tập giới từ", "Sử dụng giới từ đúng"],
            [7,  "Chuyên đề 17: Liên từ – Lý thuyết & ví dụ", "Conjunctions: and, but, or", "Conjunction rules", "Viết câu với liên từ", "Hiểu liên từ"],
            [8,  "Chuyên đề 17: Liên từ – Bài tập thực hành", "Although, unless", "Advanced conjunctions", "Làm bài tập liên từ", "Sử dụng liên từ đúng"],
            [9,  "Chuyên đề 18: Câu bị động – Các dạng bị động cơ bản", "Passive voice", "Passive voice forms", "Chuyển câu sang bị động", "Hiểu câu bị động"],
            [10, "Chuyên đề 18: Câu bị động – Bài tập ứng dụng", "Advanced passives", "Usage of passives", "Viết đoạn văn bị động", "Ứng dụng bị động"],
            [11, "Chuyên đề 19: Câu điều kiện – Lý thuyết & ví dụ", "Conditionals (0,1,2)", "Conditional sentence rules", "Viết câu điều kiện", "Hiểu câu điều kiện"],
            [12, "Chuyên đề 19: Câu điều kiện – Bài tập luyện tập", "Conditionals (3, mixed)", "Mixed conditionals", "Làm bài tập điều kiện nâng cao", "Ứng dụng điều kiện nâng cao"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Chuyên đề 20: Câu trực tiếp, gián tiếp – Nguyên tắc chuyển đổi", "Direct speech", "Rules for reported speech", "Chuyển câu trực tiếp thành gián tiếp", "Hiểu câu trực tiếp/gián tiếp"],
            [15, "Chuyên đề 20: Câu trực tiếp, gián tiếp – Bài tập ứng dụng", "Indirect speech", "Reported questions & commands", "Bài tập reported speech", "Ứng dụng reported speech"],
            [16, "Chuyên đề 21: Đảo ngữ – Lý thuyết & ví dụ", "Inversion structures", "Inversion rules", "Viết câu đảo ngữ", "Hiểu đảo ngữ"],
            [17, "Chuyên đề 21: Đảo ngữ – Bài tập thực hành", "Negative inversion", "Practice inversion", "Bài tập đảo ngữ", "Ứng dụng đảo ngữ"],
            [18, "Chuyên đề 22: Mệnh đề quan hệ – Lý thuyết & ví dụ", "Relative clauses", "Relative clause rules", "Viết câu với mệnh đề quan hệ", "Hiểu mệnh đề quan hệ"],
            [19, "Chuyên đề 22: Mệnh đề quan hệ – Bài tập ứng dụng", "Defining & non-defining", "Reduced relative clauses", "Bài tập rút gọn mệnh đề quan hệ", "Ứng dụng mệnh đề quan hệ"],
            [20, "Chuyên đề 23: Thành ngữ – Các thành ngữ phổ biến", "Idioms", "Idiomatic usage", "Viết câu với idioms", "Hiểu thành ngữ"],
            [21, "Chuyên đề 23: Thành ngữ – Bài tập luyện tập", "Idiomatic phrases", "Idioms in sentences", "Bài tập idioms", "Ứng dụng thành ngữ"],
            [22, "Chuyên đề 24: Cụm từ cố định – Tổng hợp & bài tập", "Fixed expressions", "Fixed expression rules", "Viết câu với cụm từ cố định", "Hiểu cụm từ cố định"],
            [23, "Chuyên đề 25: Cấu trúc thông dụng – Tổng hợp & bài tập", "Common structures", "Common structures", "Viết đoạn văn dùng cấu trúc thông dụng", "Ứng dụng cấu trúc thông dụng"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY UNICOLLEGE 3 ==========
        $subject = Subject::where('name', 'ICY UNICOLLEGE 3')->first();

        $lessons_unicollege3 = [
            [1,  "Test 1 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [2,  "Test 1 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [3,  "Test 2 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [4,  "Test 2 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [5,  "Test 3 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [6,  "Test 3 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [7,  "Test 4 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [8,  "Test 4 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [9,  "Test 5 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [10, "Test 5 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [11, "Review Test 1–5", "Review Vocabulary (Test consolidation)", "Review Grammar (Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 bài test"],
            [12, "Test 6 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Test 6 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [15, "Test 7 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [16, "Test 7 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [17, "Test 8 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [18, "Test 8 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [19, "Test 9 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [20, "Test 9 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [21, "Test 10 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [22, "Test 10 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [23, "Review Test 6–10", "Review Vocabulary (Test consolidation)", "Review Grammar (Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 bài test"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_unicollege3 as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        //
        $subject = Subject::where('name', 'ICY UNICOLLEGE 4')->first();

        $lessons_unicollege4 = [
            [1,  "Test 11 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [2,  "Test 11 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [3,  "Test 12 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [4,  "Test 12 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [5,  "Test 13 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [6,  "Test 13 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [7,  "Test 14 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [8,  "Test 14 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [9,  "Test 15 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [10, "Test 15 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [11, "Review Test 11–15", "Review Vocabulary (Test consolidation)", "Review Grammar (Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 bài test"],
            [12, "Test 16 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Test 16 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [15, "Test 17 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [16, "Test 17 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [17, "Test 18 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [18, "Test 18 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [19, "Test 19 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [20, "Test 19 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [21, "Test 20 - Lesson 1: General", "Penbook Test vocabulary (General)", "Penbook grammar focus (General)", "Làm phần General trong Test Penbook", "Hoàn thành phần General của Test Penbook"],
            [22, "Test 20 - Lesson 2: Reading", "Penbook Test vocabulary (Reading)", "Penbook grammar focus (Reading)", "Làm phần Reading trong Test Penbook", "Hoàn thành phần Reading của Test Penbook"],
            [23, "Review Test 16–20", "Review Vocabulary (Test consolidation)", "Review Grammar (Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 bài test"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_unicollege4 as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }


        // ========== ICY UNICOLLEGE 5 ==========
        $subject = Subject::where('name', 'ICY UNICOLLEGE 5')->first();

        $lessons_unicollege5 = [
            [1,  "Mock Test 1 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [2,  "Mock Test 1 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [3,  "Mock Test 2 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [4,  "Mock Test 2 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [5,  "Mock Test 3 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [6,  "Mock Test 3 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [7,  "Mock Test 4 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [8,  "Mock Test 4 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [9,  "Mock Test 5 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [10, "Mock Test 5 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [11, "Review Mock Test 1–5", "Review Vocabulary (Mock Test consolidation)", "Review Grammar (Mock Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 Mock Tests"],
            [12, "Mock Test 6 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Mock Test 6 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [15, "Mock Test 7 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [16, "Mock Test 7 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [17, "Mock Test 8 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [18, "Mock Test 8 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [19, "Mock Test 9 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [20, "Mock Test 9 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [21, "Mock Test 10 - Lesson 1: General", "ICY Mock Test vocabulary (General)", "ICY Mock Test grammar focus (General)", "Làm phần General trong Mock Test ICY", "Hoàn thành phần General của Mock Test ICY"],
            [22, "Mock Test 10 - Lesson 2: Reading", "ICY Mock Test vocabulary (Reading)", "ICY Mock Test grammar focus (Reading)", "Làm phần Reading trong Mock Test ICY", "Hoàn thành phần Reading của Mock Test ICY"],
            [23, "Review Mock Test 6–10", "Review Vocabulary (Mock Test consolidation)", "Review Grammar (Mock Test consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 5 Mock Tests"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons_unicollege5 as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY UNICOLLEGE 6 ==========
        $subject = Subject::where('name', 'ICY UNICOLLEGE 6')->first();

        $lessons = [
            [1,  "Đề thi thật 2017 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [2,  "Đề thi thật 2017 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [3,  "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [4,  "Đề thi thật 2018 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [5,  "Đề thi thật 2018 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [6,  "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [7,  "Đề thi thật 2019 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [8,  "Đề thi thật 2019 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [9,  "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [10, "Đề thi thật 2020 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [11, "Đề thi thật 2020 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [12, "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [13, "Mid-term Test", "Mid-term vocabulary", "Mid-term review grammar", "Mid-term exam", "Đánh giá giữa kỳ"],
            [14, "Đề thi thật 2021 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [15, "Đề thi thật 2021 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [16, "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [17, "Đề thi thật 2022 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [18, "Đề thi thật 2022 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [19, "Review", "Review Vocabulary (Exam consolidation)", "Review Grammar (Exam consolidation)", "Bài tập củng cố Grammar + Vocabulary", "Củng cố Grammar + Vocabulary sau 1 đề thi"],
            [20, "Đề thi thật 2023 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [21, "Đề thi thật 2023 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [22, "Đề thi thật 2024 - Lesson 1: General", "Exam vocabulary (General)", "Grammar focus (General exam)", "Làm phần General của đề thi thật", "Hoàn thành phần General của đề thi thật"],
            [23, "Đề thi thật 2024 - Lesson 2: Reading", "Exam vocabulary (Reading)", "Grammar focus (Reading exam)", "Làm phần Reading của đề thi thật", "Hoàn thành phần Reading của đề thi thật"],
            [24, "Final Test", "Final Test vocabulary", "Final Test grammar", "Final exam", "Đánh giá cuối kỳ"],
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY Primary School - Grade 1 First semester ==========

        $subject = Subject::where('name', 'ICY Primary School - Grade 1 First semester')->first();

        $lessons = [
            [1, "Unit 1 – What’s this? (School things)", "bag, book, pen, pencil", "What’s this? It’s a …", "Workbook p.8, practice asking “What’s this?”", "Học viên có thể hỏi và trả lời về đồ vật trong lớp học bằng mẫu câu “What’s this?”"],
            [2, "Unit 1 – Reading: a description", "ruler, desk, chair", "It’s a …", "Reading comprehension, write 3 sentences", "Học viên có thể đọc hiểu và mô tả đồ vật bằng câu hoàn chỉnh"],
            [3, "Unit 1 – Speaking & Writing", "eraser, bag, pencil case", "What’s this? It’s a …", "Workbook writing task", "Học viên có thể viết câu giới thiệu đồ dùng học tập đúng cấu trúc"],
            [4, "Fluency Time 1 – Introductions", "Hello, Goodbye, What’s your name?", "My name’s …", "Pair speaking activity", "Học viên có thể chào hỏi và giới thiệu bản thân"],
            [5, "Review 1 – Unit 1 summary", "school things (review)", "question form “What’s this?”", "Workbook review exercises", "Học viên có thể nhận diện và hỏi về đồ vật trong lớp học tự nhiên"],
            [6, "Unit 2 – Playtime! (Toys)", "ball, doll, car, teddy", "Is this your teddy? Yes, it is.", "Workbook p.14", "Học viên có thể hỏi – trả lời về đồ chơi yêu thích"],
            [7, "Unit 2 – Listening & Writing", "bike, kite, robot", "No, it isn’t.", "Write about favourite toy", "Học viên có thể viết câu về đồ chơi yêu thích của mình"],
            [8, "Unit 2 – Speaking Practice", "toy box, puzzle", "Is this your …?", "Oral pairwork", "Học viên có thể đặt câu hỏi đúng ngữ pháp về đồ vật"],
            [9, "Fluency Time 2 – Project: a puppet", "puppet, eyes, mouth", "This is my …", "Make a puppet & label parts", "Học viên có thể giới thiệu sản phẩm tự làm và mô tả bằng câu đơn giản"],
            [10, "Review 2 – Unit 2 summary", "toy vocabulary (review)", "Yes/No short answers", "Workbook + speaking test", "Học viên củng cố kỹ năng hỏi – đáp về đồ chơi"],
            [11, "Unit 3 – This is my nose! (My body)", "arm, leg, head, nose", "This is my … / These are …", "Workbook p.20", "Học viên có thể chỉ và nói tên các bộ phận cơ thể"],
            [12, "Unit 3 – Reading & Writing", "eyes, ears, mouth", "Singular / plural", "Label a body picture", "Học viên có thể nhận biết và viết tên bộ phận cơ thể"],
            [13, "Unit 3 – Speaking Practice", "body parts (review)", "This/These structures", "Pair speaking", "Học viên có thể mô tả cơ thể mình bằng câu hoàn chỉnh"],
            [14, "Fluency Time 3 – Project: body puppet", "body words", "This is my …", "Project activity", "Học viên có thể trình bày phần cơ thể qua sản phẩm sáng tạo"],
            [15, "Review 3 – Units 1–3", "school, toys, body words", "revision", "Workbook review", "Học viên tổng hợp và vận dụng kiến thức 3 unit đầu"],
            [16, "Ôn tập kiểm tra giữa kỳ 1", "Tổng hợp Units 1–3", "", "Ôn luyện nói – viết – nghe", "Học viên củng cố toàn bộ kiến thức học kỳ 1 phần 1"],
            [17, "Kiểm tra giữa học kỳ 1", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực theo 3 kỹ năng nghe – nói – viết"],
            [18, "Unit 4 – He’s a hero! (Jobs)", "teacher, doctor, pilot", "He’s / She’s a …", "Workbook p.30", "Học viên có thể giới thiệu nghề nghiệp của người khác"],
            [19, "Unit 4 – Reading: autobiographies", "nurse, police officer", "Is he a …? Yes, he is.", "Reading & writing", "Học viên có thể đặt câu hỏi về nghề nghiệp"],
            [20, "Unit 4 – Speaking Practice", "job review", "He’s not a …", "Pairwork dialogue", "Học viên có thể hỏi – trả lời về nghề nghiệp đúng cấu trúc"],
            [21, "Unit 5 – Where’s the ball? (The park)", "park, swing, slide", "in / on / under", "Workbook p.36", "Học viên có thể mô tả vị trí đồ vật trong không gian"],
            [22, "Unit 5 – Reading & Listening", "ball, bench, tree", "Where’s the …?", "Listening task", "Học viên có thể hiểu và chỉ ra vị trí vật qua mô tả"],
            [23, "Fluency Time 4 – Project: park poster", "park, playground", "in / on / under", "Create a park poster", "Học viên có thể trình bày mô hình công viên đơn giản"],
            [24, "Review 4 – Units 4–5", "jobs, park words", "review", "Workbook", "Học viên có thể kết hợp mô tả nghề nghiệp & vị trí"],
            [25, "Unit 6 – Billy’s teddy! (Family)", "mom, dad, sister, brother", "Possessive ’s", "Workbook p.42", "Học viên có thể giới thiệu thành viên gia đình"],
            [26, "Unit 6 – Reading & Writing", "grandma, grandpa, family", "Who’s this?", "Writing task", "Học viên có thể hỏi – trả lời về người thân"],
            [27, "Fluency Time 5 – Project: family album", "family members", "This is my …", "Create album", "Học viên có thể trình bày album gia đình bằng tiếng Anh"],
            [28, "Review 5 – Units 1–6", "all vocab review", "mixed grammar", "Workbook + oral test", "Học viên tổng hợp toàn bộ kiến thức học kỳ"],
            [29, "Unit 7 – Are these his trousers? (Clothes)", "T-shirt, trousers, socks", "Are these his …?", "Workbook p.52", "Học viên có thể hỏi – trả lời về quần áo"],
            [30, "Unit 7 – Listening & Writing", "dress, shoes, hat", "Yes, they are / No, they aren’t", "Writing practice", "Học viên có thể viết câu mô tả trang phục"],
            [31, "Unit 7 – Speaking Practice", "clothes review", "Possessive pronouns", "Pair speaking", "Học viên có thể hỏi và trả lời về đồ dùng cá nhân"],
            [32, "Fluency Time 6 – Project: clothes cube", "clothes", "adjectives (colour)", "Design project", "Học viên có thể miêu tả trang phục bằng tính từ màu sắc"],
            [33, "Review 6 – Unit 7 summary", "clothes vocab", "revision", "Workbook review", "Học viên có thể tự tin sử dụng mẫu câu hỏi – đáp về trang phục"],
            [34, "Ôn tập kiểm tra cuối kỳ 1", "Tổng hợp Units 1–7", "", "Ôn luyện toàn phần", "Học viên ôn lại toàn bộ kỹ năng nghe, nói, viết"],
            [35, "Kiểm tra cuối học kỳ 1", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực tổng thể sau khóa học"]
        ];
        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY Primary School - Grade 1 Second semester ==========

        $subject = Subject::where('name', 'ICY Primary School - Grade 1 Second semester')->first();

        $lessons = [
            [1, "Unit 8 – Where’s Grandma? (House & rooms)", "kitchen, bedroom, garden", "She’s in the …", "Workbook p.58", "Học viên có thể nói và hỏi vị trí người trong nhà"],
            [2, "Unit 8 – Reading & Listening", "living room, bathroom", "Where are …?", "Listening & drawing", "Học viên có thể nghe và chỉ ra vị trí chính xác của người/vật"],
            [3, "Unit 8 – Writing Practice", "kitchen, garden, bedroom", "They’re in the …", "Workbook writing", "Học viên có thể viết câu mô tả nơi ở của người trong tranh"],
            [4, "Fluency Time 1 – Project: My house drawing", "house, rooms", "prepositions in/on/under", "Create house map", "Học viên có thể vẽ và thuyết trình về ngôi nhà của mình bằng tiếng Anh"],
            [5, "Review 1 – Unit 8 summary", "house & rooms", "review", "Workbook + speaking", "Học viên củng cố vốn từ và mẫu câu nói về vị trí trong nhà"],
            [6, "Unit 9 – Lunchtime! (Food & meals)", "banana, sandwich, apple", "I’ve got … / I haven’t got …", "Workbook p.64", "Học viên có thể nói về món ăn mình có và không có"],
            [7, "Unit 9 – Reading & Listening", "lunchbox, juice, pear", "a / an", "Reading & labeling food items", "Học viên có thể đọc và xác định đồ ăn qua mô tả"],
            [8, "Unit 9 – Speaking Practice", "food review", "using a/an", "Pair conversation", "Học viên có thể miêu tả bữa ăn của mình bằng câu hoàn chỉnh"],
            [9, "Fluency Time 2 – Project: My lunchbox", "food words", "I’ve got / I haven’t got", "Create mini poster", "Học viên có thể giới thiệu lunchbox của mình bằng tiếng Anh"],
            [10, "Review 2 – Units 8–9", "food, house", "review", "Workbook + oral quiz", "Học viên kết hợp mô tả bữa ăn và địa điểm sinh hoạt trong nhà"],
            [11, "Unit 10 – A new friend! (Friends & shapes)", "circle, square, triangle", "He’s / She’s got …", "Workbook p.74", "Học viên có thể giới thiệu bạn mới và đặc điểm của họ"],
            [12, "Unit 10 – Reading & Writing", "friends, shapes", "Has he/she got …?", "Workbook writing", "Học viên có thể viết đoạn ngắn mô tả bạn của mình"],
            [13, "Unit 11 – I like monkeys! (Animals)", "elephant, tiger, monkey", "I like / don’t like …", "Workbook p.80", "Học viên có thể nói về sở thích đối với động vật"],
            [14, "Unit 11 – Reading & Speaking", "zoo, animals", "Do you like …?", "Pair speaking", "Học viên có thể hỏi – trả lời về động vật mình thích"],
            [15, "Fluency Time 3 – Project: My zoo", "animals", "like / don’t like", "Make zoo chart", "Học viên có thể trình bày sở thích về các loài vật"],
            [16, "Review 3 – Units 10–11", "animals, shapes", "review", "Workbook", "Học viên củng cố kiến thức về mô tả bạn bè và động vật"],
            [17, "Ôn tập kiểm tra giữa kỳ 2", "Tổng hợp Units 8–11", "", "Ôn luyện nói – viết – nghe", "Học viên củng cố toàn bộ kiến thức nửa đầu học kỳ 2"],
            [18, "Kiểm tra giữa học kỳ 2", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực nghe – nói – viết sau Units 8–11"],
            [19, "Unit 12 – Dinnertime! (Food & drinks)", "water, milk, pizza, rice", "Do you like …? Yes, I do.", "Workbook p.86", "Học viên có thể hỏi và trả lời về món ăn yêu thích"],
            [20, "Unit 12 – Reading & Listening", "apple juice, tea, bread", "I don’t like …", "Listening comprehension", "Học viên có thể hiểu nội dung hội thoại về bữa ăn"],
            [21, "Fluency Time 4 – Project: food plate", "food words", "like/don’t like", "Create a paper plate project", "Học viên có thể trình bày món ăn yêu thích bằng hình ảnh"],
            [22, "Review 4 – Unit 12 summary", "food review", "revision", "Workbook", "Học viên tổng hợp và vận dụng cấu trúc “Do you like…?” chính xác"],
            [23, "Unit 13 – Tidy up! (Bedroom)", "bed, rug, bin, fig", "There’s / There are …", "Workbook p.96", "Học viên có thể mô tả đồ vật trong phòng ngủ"],
            [24, "Unit 13 – Reading & Writing", "room, window, door", "Plural nouns", "Workbook writing", "Học viên có thể viết mô tả căn phòng của mình"],
            [25, "Unit 14 – Action Boy can run! (Verbs)", "run, jump, fly, swim", "He can / He can’t …", "Workbook p.102", "Học viên có thể nói về khả năng của bản thân và người khác"],
            [26, "Unit 14 – Speaking Practice", "verb actions", "Can you …?", "Pairwork", "Học viên có thể hỏi – trả lời về khả năng vận động"],
            [27, "Fluency Time 5 – Project: action poster", "action words", "can / can’t", "Create poster", "Học viên có thể trình bày hoạt động yêu thích qua poster"],
            [28, "Review 5 – Units 13–14", "bedroom, verbs", "review", "Workbook", "Học viên củng cố kỹ năng mô tả phòng ngủ và khả năng hành động"],
            [29, "Unit 15 – Let’s play ball! (Beach & sports)", "beach, ball, bat, shell", "Let’s + verb", "Workbook p.108", "Học viên có thể rủ rê bạn bè tham gia trò chơi"],
            [30, "Unit 15 – Reading & Writing", "sea, sand, sun", "Imperatives", "Writing sentences", "Học viên có thể viết câu hướng dẫn đơn giản"],
            [31, "Fluency Time 6 – Project: beach game", "beach items", "Let’s …", "Create game plan", "Học viên có thể mô tả trò chơi trên bãi biển bằng tiếng Anh"],
            [32, "Review 6 – Unit 15 summary", "beach & sports", "review", "Workbook", "Học viên củng cố mẫu câu mời gọi và mô tả hoạt động thể thao"],
            [33, "Review 7 – Units 8–15", "all vocab review", "mixed grammar", "Workbook + oral test", "Học viên tổng hợp toàn bộ kiến thức học kỳ 2"],
            [34, "Ôn tập kiểm tra cuối kỳ 2", "Tổng hợp Units 8–15", "", "Ôn luyện toàn phần", "Học viên củng cố toàn bộ kỹ năng nghe, nói, viết"],
            [35, "Kiểm tra cuối học kỳ 2", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực tổng thể cuối khóa học"]
        ];
        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY Primary School - Grade 2 First semester ==========

        $subject = Subject::where('name', 'ICY Primary School - Grade 2 First semester')->first();

        $lessons = [
            [1, "Unit 1 – Our new things (School things)", "pen, ruler, book, bag", "This/That is … / These/Those are …", "Workbook p.8", "Học viên có thể nói và hỏi về đồ vật trong lớp học bằng câu “This is … / These are …”"],
            [2, "Unit 1 – Reading & Listening", "classroom, desk, pencil case", "There is / There are", "Reading comprehension", "Học viên có thể hiểu và mô tả lớp học bằng cấu trúc “There is/There are”"],
            [3, "Unit 1 – Speaking & Writing", "school bag, board", "question: What’s this/that?", "Workbook writing", "Học viên có thể viết đoạn ngắn mô tả đồ vật học tập"],
            [4, "Fluency Time 1 – Classroom language", "open, close, listen, repeat", "Imperatives", "Pair practice", "Học viên có thể hiểu và thực hiện mệnh lệnh trong lớp học"],
            [5, "Review 1 – Unit 1 summary", "school things", "review", "Workbook + oral quiz", "Học viên củng cố vốn từ và mẫu câu mô tả đồ vật"],
            [6, "Unit 2 – They’re happy now! (Feelings)", "happy, sad, angry, tired", "He’s / She’s … / They’re …", "Workbook p.14", "Học viên có thể mô tả cảm xúc của người khác bằng câu đầy đủ"],
            [7, "Unit 2 – Listening & Speaking", "feelings review", "Is he …? / Are they …?", "Pair dialogue", "Học viên có thể hỏi và trả lời về cảm xúc"],
            [8, "Unit 2 – Writing Practice", "sad, happy, tired", "He’s not … / They aren’t …", "Workbook writing", "Học viên có thể viết mô tả cảm xúc đơn giản"],
            [9, "Fluency Time 2 – Project: My feelings chart", "happy, sad, excited", "adjectives review", "Make a mini chart", "Học viên có thể trình bày cảm xúc bản thân qua biểu đồ"],
            [10, "Review 2 – Units 1–2", "classroom, feelings", "review", "Workbook + game", "Học viên tổng hợp kỹ năng mô tả đồ vật và cảm xúc"],
            [11, "Unit 3 – I can ride a bike! (Outdoor activities)", "ride, run, jump, swim", "She can / can’t …", "Workbook p.20", "Học viên có thể nói về khả năng vận động của mình"],
            [12, "Unit 3 – Reading & Listening", "park, skateboard, bike", "Can he …? Yes, he can.", "Listening activity", "Học viên có thể nghe và xác định khả năng của người khác"],
            [13, "Unit 3 – Writing Practice", "activities review", "using “can/can’t”", "Workbook writing", "Học viên có thể viết đoạn về hoạt động yêu thích"],
            [14, "Fluency Time 3 – Project: School wheel", "activities, actions", "can/can’t review", "Create school project", "Học viên có thể nói và viết về hoạt động trong trường"],
            [15, "Review 3 – Unit 3 summary", "outdoor activities", "review", "Workbook + oral test", "Học viên củng cố ngữ pháp “can/can’t” và vốn từ hoạt động"],
            [16, "Ôn tập kiểm tra giữa kỳ 1", "Tổng hợp Units 1–3", "", "Ôn luyện nói – nghe – viết", "Học viên củng cố toàn bộ kiến thức giữa kỳ"],
            [17, "Kiểm tra giữa học kỳ 1", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực nghe, nói, viết"],
            [18, "Unit 4 – Have you got a milkshake? (Food & numbers)", "apple, banana, milkshake, burger", "Have you got …? Yes, I have.", "Workbook p.30", "Học viên có thể hỏi – trả lời về món ăn và đồ uống"],
            [19, "Unit 4 – Reading & Listening", "sandwich, orange juice", "Has he got …?", "Listening activity", "Học viên có thể hiểu đoạn hội thoại về bữa ăn"],
            [20, "Unit 4 – Writing Practice", "food items", "I haven’t got …", "Workbook", "Học viên có thể viết đoạn ngắn về đồ ăn yêu thích"],
            [21, "Unit 5 – We’ve got English! (School subjects)", "English, maths, PE, music", "We’ve got … / We haven’t got …", "Workbook p.36", "Học viên có thể nói về môn học trong thời khóa biểu"],
            [22, "Unit 5 – Reading & Writing", "classroom subjects", "What / When have we got …?", "Writing task", "Học viên có thể viết câu hỏi về lịch học"],
            [23, "Fluency Time 4 – Project: School timetable", "subjects", "We’ve got …", "Create timetable", "Học viên có thể trình bày thời khóa biểu bằng tiếng Anh"],
            [24, "Review 4 – Units 4–5", "food & subjects", "review", "Workbook + oral test", "Học viên củng cố kỹ năng nói về đồ ăn và môn học"],
            [25, "Unit 6 – Let’s play after school! (After-school activities)", "read, paint, play football", "I visit … / I go …", "Workbook p.42", "Học viên có thể nói về hoạt động sau giờ học"],
            [26, "Unit 6 – Listening & Speaking", "after-school verbs", "Do you … after school?", "Pair activity", "Học viên có thể hỏi – trả lời về thói quen sau giờ học"],
            [27, "Fluency Time 5 – Project: Market stall", "activities, objects", "I buy … / I sell …", "Create project", "Học viên có thể mô tả hoạt động mua bán trong hội chợ trường"],
            [28, "Review 5 – Units 1–6", "all vocab review", "mixed grammar", "Workbook", "Học viên tổng hợp và luyện tập lại toàn bộ ngữ pháp đã học"],
            [29, "Unit 7 – Let’s buy presents! (Special days & gifts)", "card, doll, toy car, book", "What does he like? He likes …", "Workbook p.52", "Học viên có thể nói về sở thích và chọn quà phù hợp"],
            [30, "Unit 7 – Reading & Listening", "present, gift, balloon", "He doesn’t like …", "Listening & writing", "Học viên có thể nghe hiểu và miêu tả sở thích của người khác"],
            [31, "Unit 7 – Speaking Practice", "toys, presents", "What would you like?", "Pair activity", "Học viên có thể hỏi – trả lời về món quà muốn nhận"],
            [32, "Fluency Time 6 – Project: My present card", "gift, ribbon", "sentence review", "Make a card", "Học viên có thể tạo và giới thiệu thiệp chúc bằng tiếng Anh"],
            [33, "Review 6 – Unit 7 summary", "presents & hobbies", "review", "Workbook", "Học viên củng cố ngữ pháp “like/don’t like” và vốn từ về quà tặng"],
            [34, "Ôn tập kiểm tra cuối kỳ 1", "Tổng hợp Units 1–7", "", "Ôn luyện toàn phần", "Học viên củng cố toàn bộ kỹ năng nghe, nói, viết"],
            [35, "Kiểm tra cuối học kỳ 1", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực tổng thể học kỳ 1"]
        ];
        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY Primary School - Grade 2 Second semester ==========

        $subject = Subject::where('name', 'ICY Primary School - Grade 2 Second semester')->first();

        $lessons = [
            [1, "Unit 8 – What’s the time? (Daily routines & time)", "breakfast, lunch, dinner, o’clock", "It’s … o’clock. / He’s at … o’clock.", "Workbook p.58", "Học viên có thể nói giờ và mô tả hoạt động hàng ngày bằng câu hoàn chỉnh"],
            [2, "Unit 8 – Reading & Listening", "morning, afternoon, evening", "It’s time for …", "Listening & writing task", "Học viên có thể nghe hiểu và viết câu mô tả thời gian sinh hoạt"],
            [3, "Unit 8 – Speaking Practice", "wake up, go to school, go home", "When do you …?", "Pair dialogue", "Học viên có thể hỏi và trả lời về lịch sinh hoạt cá nhân"],
            [4, "Fluency Time 1 – Project: My daily clock", "time words", "o’clock / at …", "Create time wheel", "Học viên có thể thiết kế đồng hồ thời gian và giới thiệu lịch sinh hoạt"],
            [5, "Review 1 – Unit 8 summary", "time & activities", "review", "Workbook", "Học viên củng cố vốn từ và cấu trúc hỏi – đáp về thời gian"],
            [6, "Unit 9 – Where does she work? (Jobs & places)", "hospital, school, shop, zoo", "Where does he/she work? He works in a …", "Workbook p.64", "Học viên có thể hỏi – trả lời về nơi làm việc của người khác"],
            [7, "Unit 9 – Reading & Listening", "teacher, doctor, vet", "Does she work in a …?", "Listening task", "Học viên có thể hiểu hội thoại về nghề nghiệp"],
            [8, "Unit 9 – Writing Practice", "jobs & places", "using “in / at”", "Workbook writing", "Học viên có thể viết đoạn ngắn giới thiệu nơi làm việc của người thân"],
            [9, "Fluency Time 2 – Project: My mini book", "jobs vocabulary", "Wh- questions", "Create booklet", "Học viên có thể trình bày quyển mini book về nghề nghiệp"],
            [10, "Review 2 – Units 8–9", "time, jobs", "review", "Workbook + quiz", "Học viên củng cố kỹ năng nói về thời gian và nghề nghiệp"],
            [11, "Unit 10 – It’s hot today! (Weather)", "sunny, rainy, cloudy, windy", "What’s the weather like? It’s …", "Workbook p.74", "Học viên có thể mô tả thời tiết hiện tại"],
            [12, "Unit 10 – Reading & Writing", "cold, hot, snowy", "Put on … / Don’t put on …", "Workbook writing", "Học viên có thể viết câu gợi ý trang phục phù hợp thời tiết"],
            [13, "Unit 11 – What are you wearing? (Clothes)", "shirt, skirt, shoes, trousers", "I’m wearing … / He’s wearing …", "Workbook p.80", "Học viên có thể mô tả trang phục bản thân và người khác"],
            [14, "Unit 11 – Speaking & Listening", "dress, coat, hat", "Who’s wearing …?", "Pair speaking", "Học viên có thể hỏi – trả lời về trang phục trong tình huống cụ thể"],
            [15, "Fluency Time 3 – Project: At the airport", "clothes vocabulary", "present continuous", "Create airport role play", "Học viên có thể đóng vai và miêu tả người khác bằng hiện tại tiếp diễn"],
            [16, "Review 3 – Units 10–11", "weather, clothes", "review", "Workbook", "Học viên củng cố mẫu câu mô tả thời tiết và trang phục"],
            [17, "Ôn tập kiểm tra giữa kỳ 2", "Tổng hợp Units 8–11", "", "Ôn luyện kỹ năng nghe – nói – viết", "Học viên củng cố toàn bộ kiến thức nửa đầu học kỳ 2"],
            [18, "Kiểm tra giữa học kỳ 2", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực nghe, nói, viết sau Units 8–11"],
            [19, "Unit 12 – You’re sleeping! (Daily actions)", "sleep, dance, read, sing", "What are you doing? I’m …", "Workbook p.86", "Học viên có thể mô tả hành động đang diễn ra"],
            [20, "Unit 12 – Reading & Writing", "eat, play, talk", "He’s / She’s …ing", "Workbook writing", "Học viên có thể viết đoạn ngắn mô tả hành động của người khác"],
            [21, "Fluency Time 4 – Project: At a party", "party, balloons, cake", "present continuous", "Create party poster", "Học viên có thể trình bày hoạt động trong bữa tiệc bằng hiện tại tiếp diễn"],
            [22, "Review 4 – Unit 12 summary", "party words", "review", "Workbook", "Học viên củng cố mẫu câu “What are you doing?”"],
            [23, "Unit 13 – Look at all the animals! (Farm animals)", "cow, sheep, pig, goat", "This cow is bigger than …", "Workbook p.96", "Học viên có thể so sánh các con vật bằng tính từ dài/ngắn"],
            [24, "Unit 13 – Reading & Listening", "duck, horse, hen", "Comparatives", "Listening task", "Học viên có thể nghe và nhận biết mô tả so sánh động vật"],
            [25, "Unit 14 – Look at the photos! (Memories)", "photo, school, trip, picnic", "Was / Were", "Workbook p.102", "Học viên có thể nói về sự kiện trong quá khứ bằng “was/were”"],
            [26, "Unit 14 – Writing Practice", "happy, sad, funny", "Past simple", "Workbook writing", "Học viên có thể viết đoạn ngắn kể lại kỷ niệm vui"],
            [27, "Fluency Time 5 – Project: My memory book", "school trip, photo", "past tense", "Make a mini scrapbook", "Học viên có thể trình bày kỷ niệm bằng câu quá khứ đơn giản"],
            [28, "Review 5 – Units 13–14", "animals, memories", "review", "Workbook + oral quiz", "Học viên củng cố cách dùng so sánh và thì quá khứ"],
            [29, "Unit 15 – Well done! (Fairy tales & achievements)", "king, queen, frog, castle", "There were … / weren’t …", "Workbook p.108", "Học viên có thể kể lại câu chuyện cổ tích bằng cấu trúc quá khứ"],
            [30, "Unit 15 – Reading & Speaking", "story, crown, magic", "Irregular plurals", "Storytelling", "Học viên có thể kể lại và miêu tả nhân vật trong truyện cổ tích"],
            [31, "Fluency Time 6 – Project: A card game", "characters, fairy tale", "was/were review", "Create card game", "Học viên có thể chơi và nói về nhân vật bằng tiếng Anh"],
            [32, "Review 6 – Unit 15 summary", "fairy tale words", "review", "Workbook", "Học viên củng cố từ vựng và ngữ pháp quá khứ đơn"],
            [33, "Review 7 – Units 8–15", "all vocab review", "mixed grammar", "Workbook + oral test", "Học viên tổng hợp toàn bộ kiến thức học kỳ 2"],
            [34, "Ôn tập kiểm tra cuối kỳ 2", "Tổng hợp Units 8–15", "", "Ôn luyện toàn phần", "Học viên củng cố kỹ năng nghe, nói, viết toàn học kỳ"],
            [35, "Kiểm tra cuối học kỳ 2", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực tổng thể cuối năm học"]
        ];

        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY Primary School - Grade 3 First semester ==========

        $subject = Subject::where('name', 'ICY Primary School - Grade 3 First semester')->first();

        $lessons = [
            [1, "Unit 1 – They’re from Australia! (Countries & homes)", "Australia, Egypt, England, home", "Present simple: be – I’m, He’s, She’s, They’re", "Workbook p.8", "Học viên có thể giới thiệu quốc tịch và nơi ở của mình và người khác"],
            [2, "Unit 1 – Reading & Listening", "countries, seasons", "Where are you from?", "Reading comprehension", "Học viên có thể hỏi – trả lời về quê quán và thời tiết đặc trưng"],
            [3, "Unit 1 – Speaking Practice", "from, live, home", "Yes/No questions with be", "Workbook speaking", "Học viên có thể thực hành hội thoại giới thiệu bản thân"],
            [4, "Fluency Time 1 – Project: Things in common", "family, hobbies", "Present simple", "Create interview chart", "Học viên có thể hỏi – ghi lại thông tin bạn học về sở thích chung"],
            [5, "Review 1 – Unit 1 summary", "countries, homes", "review", "Workbook + quiz", "Học viên củng cố khả năng giới thiệu quốc tịch và nơi ở"],
            [6, "Unit 2 – My weekend (Hobbies & free time)", "read, play football, go swimming", "like + verb-ing", "Workbook p.14", "Học viên có thể nói về sở thích và hoạt động cuối tuần"],
            [7, "Unit 2 – Reading & Writing", "hobbies, activities", "Does he/she like …?", "Workbook writing", "Học viên có thể viết đoạn ngắn về sở thích của bản thân và bạn bè"],
            [8, "Unit 2 – Speaking Practice", "go fishing, play chess", "He likes / He doesn’t like …", "Pair dialogue", "Học viên có thể hỏi – trả lời về hoạt động yêu thích"],
            [9, "Fluency Time 2 – Project: Hobby survey", "weekend words", "like / doesn’t like", "Create hobby chart", "Học viên có thể khảo sát và báo cáo sở thích của bạn trong lớp"],
            [10, "Review 2 – Units 1–2", "countries, hobbies", "review", "Workbook", "Học viên củng cố cấu trúc “like + V-ing” và mẫu câu hỏi về sở thích"],
            [11, "Unit 3 – My things (Belongings & collections)", "bag, keys, scarf, toy", "your / our / their", "Workbook p.20", "Học viên có thể nói về đồ vật cá nhân và đồ sưu tầm"],
            [12, "Unit 3 – Reading & Listening", "collection, badges, postcards", "Can I …? / Can you …?", "Listening & writing", "Học viên có thể xin phép và trả lời bằng cấu trúc lịch sự"],
            [13, "Unit 3 – Writing Practice", "collections, objects", "question marks / punctuation", "Workbook writing", "Học viên có thể viết mô tả ngắn về bộ sưu tập cá nhân"],
            [14, "Fluency Time 3 – Project: Survey chart", "my things", "possessive adjectives", "Create survey", "Học viên có thể hỏi và ghi chú thông tin về đồ vật cá nhân"],
            [15, "Review 3 – Unit 3 summary", "my/your/their", "review", "Workbook", "Học viên củng cố kỹ năng nói – viết về sở hữu đồ vật"],
            [16, "Ôn tập kiểm tra giữa kỳ 1", "Tổng hợp Units 1–3", "", "Ôn luyện nghe – nói – viết", "Học viên củng cố kiến thức giữa kỳ"],
            [17, "Kiểm tra giữa học kỳ 1", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực nghe, nói, viết"],
            [18, "Unit 4 – We’re having fun at the beach! (Beach & activities)", "sandcastle, surf, snorkelling", "Present continuous: I’m …ing", "Workbook p.32", "Học viên có thể mô tả hoạt động đang diễn ra trên bãi biển"],
            [19, "Unit 4 – Reading & Listening", "swim, sunbathe, play", "She isn’t … / Is he …?", "Listening & comprehension", "Học viên có thể nghe hiểu mô tả hành động đang xảy ra"],
            [20, "Unit 4 – Writing Practice", "beach activities", "Adjectives: fun, exciting", "Workbook", "Học viên có thể viết đoạn về hoạt động yêu thích ở biển"],
            [21, "Unit 5 – A naughty monkey! (Zoo animals)", "lion, zebra, crocodile, elephant", "Present continuous questions", "Workbook p.38", "Học viên có thể hỏi – trả lời về hành động của con vật"],
            [22, "Unit 5 – Reading & Speaking", "animals, adjectives", "Yes, it is. / No, it isn’t.", "Pair speaking", "Học viên có thể miêu tả hành động và đặc điểm con vật"],
            [23, "Fluency Time 4 – Project: Comic strip", "zoo animals", "present continuous", "Make comic", "Học viên có thể sáng tạo truyện tranh về động vật đang làm gì"],
            [24, "Review 4 – Units 4–5", "animals, beach", "review", "Workbook + game", "Học viên củng cố mẫu câu hiện tại tiếp diễn qua hoạt động sáng tạo"],
            [25, "Unit 6 – Jim’s day (Daily routine & time words)", "breakfast, homework, lunch, dinner", "Present simple", "Workbook p.44", "Học viên có thể nói về thói quen sinh hoạt hằng ngày"],
            [26, "Unit 6 – Reading & Listening", "daily routine", "Time adverbs: always, usually, never", "Workbook writing", "Học viên có thể viết đoạn giới thiệu lịch sinh hoạt cá nhân"],
            [27, "Fluency Time 5 – Project: Daily poster", "activities", "Present simple review", "Create poster", "Học viên có thể trình bày lịch sinh hoạt bằng tiếng Anh"],
            [28, "Review 5 – Unit 6 summary", "routines", "review", "Workbook", "Học viên củng cố ngữ pháp “present simple” với từ chỉ tần suất"],
            [29, "Unit 7 – Places to go! (Leisure places)", "cinema, park, museum, library", "Present simple with adverbs", "Workbook p.52", "Học viên có thể nói về địa điểm yêu thích để vui chơi"],
            [30, "Unit 7 – Reading & Writing", "free-time activities", "Prepositions: in, on, at", "Writing task", "Học viên có thể viết đoạn mô tả nơi vui chơi của mình"],
            [31, "Unit 7 – Speaking Practice", "places, activities", "Where do you go …?", "Pair speaking", "Học viên có thể hỏi – trả lời về địa điểm mình hay đi"],
            [32, "Fluency Time 6 – Project: Film review", "cinema, movie", "sequence words", "Create mini review", "Học viên có thể viết và giới thiệu cảm nghĩ về bộ phim yêu thích"],
            [33, "Review 6 – Unit 7 summary", "leisure words", "review", "Workbook", "Học viên củng cố mẫu câu mô tả hoạt động và địa điểm vui chơi"],
            [34, "Ôn tập kiểm tra cuối kỳ 1", "Tổng hợp Units 1–7", "", "Ôn luyện toàn phần", "Học viên củng cố kỹ năng nghe, nói, viết học kỳ 1"],
            [35, "Kiểm tra cuối học kỳ 1", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực tổng thể học kỳ 1"]
        ];
        
        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY Primary School - Grade 3 Second semester ==========

        $subject = Subject::where('name', 'ICY Primary School - Grade 3 Second semester')->first();

        $lessons = [
            [1, "Unit 8 – I’d like a melon! (Food & quantities)", "melon, cereal, milk, rice", "Countable & uncountable nouns: a, an, some", "Workbook p.62", "Học viên có thể gọi món ăn và đồ uống bằng cấu trúc “I’d like …”"],
            [2, "Unit 8 – Reading & Listening", "apple, orange, bread", "Would you like …? / Yes, please.", "Listening & speaking", "Học viên có thể nghe hiểu và đáp lại lời mời ăn uống lịch sự"],
            [3, "Unit 8 – Writing Practice", "food review", "a/an/some usage", "Workbook writing", "Học viên có thể viết đoạn mô tả món ăn yêu thích"],
            [4, "Fluency Time 1 – Project: At the market", "food words", "countable review", "Create shopping role play", "Học viên có thể đóng vai mua bán tại chợ bằng tiếng Anh"],
            [5, "Review 1 – Unit 8 summary", "food vocabulary", "review", "Workbook + quiz", "Học viên củng cố kỹ năng nói và viết về món ăn"],
            [6, "Unit 9 – The fastest animal in the world (Animals & geography)", "tiger, eagle, whale, cheetah", "Comparative adjectives", "Workbook p.68", "Học viên có thể so sánh các con vật hoặc địa điểm"],
            [7, "Unit 9 – Reading & Listening", "world, mountain, desert", "Superlatives: the fastest, the biggest", "Listening & writing", "Học viên có thể hiểu và viết mô tả về địa danh tự nhiên"],
            [8, "Unit 9 – Speaking Practice", "rivers, continents", "using adjectives", "Pair speaking", "Học viên có thể nói về các địa điểm nổi bật và động vật nhanh nhất"],
            [9, "Fluency Time 2 – Project: Map of an island", "geography terms", "comparatives review", "Design island map", "Học viên có thể thiết kế bản đồ và mô tả bằng so sánh"],
            [10, "Review 2 – Units 8–9", "food, animals", "review", "Workbook", "Học viên củng cố kỹ năng viết câu so sánh và mô tả địa lý"],
            [11, "Unit 10 – In the park! (Rules & verbs)", "park, grass, path, bench", "must / mustn’t for rules", "Workbook p.80", "Học viên có thể diễn đạt quy tắc nơi công cộng"],
            [12, "Unit 10 – Reading & Writing", "playground, trees", "Don’t … / You must …", "Workbook writing", "Học viên có thể viết biển báo đơn giản về quy tắc công viên"],
            [13, "Unit 11 – In the museum (Transport & history)", "train, car, plane, bus", "Past simple with be & have", "Workbook p.86", "Học viên có thể nói về phương tiện giao thông và lịch sử"],
            [14, "Unit 11 – Reading & Speaking", "ancient, old, new", "Time words: ago, last week", "Pair dialogue", "Học viên có thể nói về chuyến đi bảo tàng trong quá khứ"],
            [15, "Fluency Time 3 – Project: Transport timeline", "transport words", "past simple", "Create poster", "Học viên có thể tạo biểu đồ phát triển phương tiện giao thông"],
            [16, "Ôn tập kiểm tra giữa kỳ 2", "Tổng hợp Units 8–11", "", "Ôn luyện nghe – nói – viết", "Học viên củng cố toàn bộ kiến thức nửa đầu học kỳ 2"],
            [17, "Kiểm tra giữa học kỳ 2", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực nghe, nói, viết sau Units 8–11"],
            [18, "Review 3 – Units 10–11", "rules, transport", "review", "Workbook", "Học viên củng cố cấu trúc “must/mustn’t” và “past simple”"],
            [19, "Unit 12 – A clever baby! (People & descriptions)", "tall, short, kind, funny", "Past simple with be/have", "Workbook p.92", "Học viên có thể mô tả người thân trong quá khứ"],
            [20, "Unit 12 – Reading & Listening", "family, baby, grandpa", "Affirmative/negative past forms", "Workbook listening", "Học viên có thể nghe hiểu và viết câu quá khứ về người thân"],
            [21, "Fluency Time 4 – Project: A party scene", "people, party", "past simple review", "Create party story", "Học viên có thể mô tả buổi tiệc trong quá khứ bằng câu hoàn chỉnh"],
            [22, "Review 4 – Unit 12 summary", "adjectives & people", "review", "Workbook", "Học viên củng cố ngữ pháp quá khứ và từ vựng mô tả người"],
            [23, "Unit 13 – The Ancient Egyptians (History)", "king, queen, pyramid, river", "Past simple (regular/irregular)", "Workbook p.104", "Học viên có thể mô tả sự kiện lịch sử và nhân vật cổ đại"],
            [24, "Unit 13 – Reading & Writing", "Egypt, temple, mummy", "Past simple negative", "Workbook writing", "Học viên có thể viết đoạn giới thiệu về nền văn minh Ai Cập"],
            [25, "Unit 14 – Did you have a good day? (Daily routine – past)", "breakfast, dinner, homework", "Past simple questions: Did you …?", "Workbook p.110", "Học viên có thể kể lại hoạt động trong ngày hôm qua"],
            [26, "Unit 14 – Speaking Practice", "activities review", "Yes, I did. / No, I didn’t.", "Pair conversation", "Học viên có thể hỏi – trả lời về thói quen trong quá khứ"],
            [27, "Fluency Time 5 – Project: Diary page", "past activities", "time words: yesterday, last night", "Create diary", "Học viên có thể viết nhật ký ngắn kể về một ngày đi học"],
            [28, "Review 5 – Units 13–14", "history, daily life", "review", "Workbook", "Học viên củng cố kỹ năng dùng thì quá khứ đơn"],
            [29, "Unit 15 – Our holiday! (Travel & future plans)", "beach, mountain, hotel, suitcase", "be going to + verb", "Workbook p.116", "Học viên có thể nói về kế hoạch đi nghỉ sắp tới"],
            [30, "Unit 15 – Reading & Listening", "camp, trip, basketball", "Future time expressions: tomorrow, next week", "Workbook listening", "Học viên có thể nghe hiểu và nói về kế hoạch trong tương lai"],
            [31, "Fluency Time 6 – Project: Photo album", "holiday, trip, fun", "going to review", "Create album", "Học viên có thể làm và trình bày album kỳ nghỉ bằng tiếng Anh"],
            [32, "Review 6 – Unit 15 summary", "travel & plans", "review", "Workbook + quiz", "Học viên củng cố mẫu câu tương lai gần"],
            [33, "Review 7 – Units 8–15", "all vocab review", "mixed grammar", "Workbook + oral test", "Học viên tổng hợp toàn bộ kiến thức học kỳ 2"],
            [34, "Ôn tập kiểm tra cuối kỳ 2", "Tổng hợp Units 8–15", "", "Ôn luyện toàn phần", "Học viên củng cố kỹ năng nghe, nói, viết học kỳ 2"],
            [35, "Kiểm tra cuối học kỳ 2", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực tổng thể cuối năm học tiếp tục"]
        ];
        
        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY Primary School - Grade 4 First semester ==========

        $subject = Subject::where('name', 'ICY Primary School - Grade 4 First semester')->first();

        $lessons = [
            [1, "Unit 1 – The food here is great! (Food & restaurants)", "restaurant, waiter, menu, salad", "Present simple & present continuous", "Workbook p.8", "Học viên có thể mô tả món ăn và thói quen ăn uống bằng thì hiện tại đơn và hiện tại tiếp diễn"],
            [2, "Unit 1 – Reading & Listening", "soup, pizza, juice, rice", "What do you like to eat? / I like …", "Reading comprehension", "Học viên có thể đọc hiểu và nói về món ăn yêu thích"],
            [3, "Unit 1 – Speaking & Writing", "vegetables, meat, dessert", "like + verb-ing", "Workbook writing", "Học viên có thể viết đoạn giới thiệu thói quen ăn uống cá nhân"],
            [4, "Fluency Time 1 – Project: Café menu", "food words", "Present tenses review", "Design café menu", "Học viên có thể sáng tạo thực đơn và thuyết trình bằng tiếng Anh"],
            [5, "Review 1 – Unit 1 summary", "food & drinks", "review", "Workbook + oral test", "Học viên củng cố kỹ năng giao tiếp về món ăn và nhà hàng"],
            [6, "Unit 2 – We had a concert (Music & events)", "concert, band, drums, guitar", "Past simple: be, have", "Workbook p.14", "Học viên có thể nói về sự kiện âm nhạc đã diễn ra"],
            [7, "Unit 2 – Reading & Writing", "violin, piano, song", "Past simple regular verbs", "Workbook writing", "Học viên có thể viết đoạn ngắn về buổi hòa nhạc"],
            [8, "Unit 2 – Speaking Practice", "music, instruments", "Was / Were", "Pair speaking", "Học viên có thể hỏi – trả lời về trải nghiệm âm nhạc trong quá khứ"],
            [9, "Fluency Time 2 – Project: My favourite band", "music words", "past tense review", "Create poster", "Học viên có thể thuyết trình về ban nhạc yêu thích"],
            [10, "Review 2 – Units 1–2", "food, music", "review", "Workbook", "Học viên củng cố cách dùng thì quá khứ đơn"],
            [11, "Unit 3 – The dinosaur museum (History & science)", "dinosaur, museum, fossil, bone", "Past simple: regular & irregular verbs", "Workbook p.20", "Học viên có thể nói về chuyến tham quan viện bảo tàng"],
            [12, "Unit 3 – Reading & Listening", "exhibition, ticket, guide", "Did you …? Yes, I did.", "Workbook listening", "Học viên có thể nghe hiểu và trả lời câu hỏi về bảo tàng"],
            [13, "Unit 3 – Writing Practice", "museum words", "Wh- questions in the past", "Workbook", "Học viên có thể viết đoạn tường thuật chuyến đi học"],
            [14, "Fluency Time 3 – Project: Fossil report", "fossils, bones", "past tense", "Create mini report", "Học viên có thể viết báo cáo ngắn về hóa thạch"],
            [15, "Review 3 – Unit 3 summary", "museum vocabulary", "review", "Workbook", "Học viên củng cố khả năng viết và nói về chủ đề khoa học"],
            [16, "Ôn tập kiểm tra giữa kỳ 1", "Tổng hợp Units 1–3", "", "Ôn luyện nghe – nói – viết", "Học viên củng cố kiến thức giữa kỳ"],
            [17, "Kiểm tra giữa học kỳ 1", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực nghe, nói, viết"],
            [18, "Unit 4 – Whose jacket is this? (Clothes & sports)", "jacket, trainers, tennis, uniform", "Possessive pronouns: mine, yours, his, hers", "Workbook p.32", "Học viên có thể hỏi – trả lời về đồ vật thuộc sở hữu của ai"],
            [19, "Unit 4 – Reading & Speaking", "shoes, bag, racket", "Whose … is this?", "Pair speaking", "Học viên có thể sử dụng đại từ sở hữu đúng ngữ cảnh"],
            [20, "Unit 4 – Writing Practice", "sports equipment", "Possessive review", "Workbook writing", "Học viên có thể viết đoạn ngắn về đồ dùng thể thao của mình"],
            [21, "Unit 5 – Go back to the roundabout (Directions & places)", "park, theatre, stadium, roundabout", "have to / has to", "Workbook p.38", "Học viên có thể mô tả chỉ đường và nêu quy tắc giao thông"],
            [22, "Unit 5 – Reading & Listening", "bridge, museum, cinema", "Giving directions", "Listening comprehension", "Học viên có thể hiểu hướng dẫn đường đi và mô tả địa điểm"],
            [23, "Fluency Time 4 – Project: Invitation letter", "city, street", "modal verbs", "Write an invitation", "Học viên có thể viết thư mời đơn giản bằng tiếng Anh"],
            [24, "Review 4 – Units 4–5", "clothes, directions", "review", "Workbook", "Học viên củng cố ngữ pháp đại từ sở hữu và chỉ đường"],
            [25, "Unit 6 – The best bed! (Descriptions & adjectives)", "soft, hard, tall, small", "Comparatives & superlatives", "Workbook p.44", "Học viên có thể so sánh đồ vật bằng tính từ so sánh hơn & nhất"],
            [26, "Unit 6 – Reading & Writing", "furniture, room", "My bed is bigger than …", "Workbook writing", "Học viên có thể viết đoạn so sánh mô tả phòng ngủ"],
            [27, "Fluency Time 5 – Project: Fairy tale comparison", "animals, adjectives", "comparative review", "Create story", "Học viên có thể viết và kể chuyện cổ tích ngắn có yếu tố so sánh"],
            [28, "Review 5 – Unit 6 summary", "adjectives", "review", "Workbook", "Học viên củng cố tính từ so sánh trong mô tả"],
            [29, "Unit 7 – Will it really happen? (Future & space)", "astronaut, rocket, space, planet", "Future with will", "Workbook p.56", "Học viên có thể nói về dự đoán trong tương lai"],
            [30, "Unit 7 – Reading & Listening", "scientist, robot, computer", "Future time expressions", "Listening comprehension", "Học viên có thể nghe hiểu và viết dự đoán về công nghệ"],
            [31, "Unit 7 – Speaking Practice", "future jobs, inventions", "I think … will …", "Workbook speaking", "Học viên có thể nói về ý kiến và dự đoán của mình"],
            [32, "Fluency Time 6 – Project: Future interview", "space, inventions", "will/won’t review", "Role-play interview", "Học viên có thể phỏng vấn và trả lời về kế hoạch tương lai"],
            [33, "Review 6 – Unit 7 summary", "future words", "review", "Workbook + quiz", "Học viên củng cố thì tương lai và từ vựng về không gian"],
            [34, "Ôn tập kiểm tra cuối kỳ 1", "Tổng hợp Units 1–7", "", "Ôn luyện toàn phần", "Học viên củng cố toàn bộ kỹ năng nghe, nói, viết"],
            [35, "Kiểm tra cuối học kỳ 1", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực tổng thể học kỳ 1 tiếp tục"]
        ];
        
        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY Primary School - Grade 4 Second semester ==========

        $subject = Subject::where('name', 'ICY Primary School - Grade 4 Second semester')->first();

        $lessons = [
            [1, "Unit 8 – How much time have we got? (Time & travel)", "airport, luggage, passport, ticket", "Present perfect: Have you got …?", "Workbook p.62", "Học viên có thể hỏi và trả lời về thời gian, hành lý, và kế hoạch chuyến đi"],
            [2, "Unit 8 – Reading & Listening", "plane, train, suitcase", "How many / How much …?", "Listening & comprehension", "Học viên có thể nghe hiểu và nói về việc chuẩn bị cho chuyến đi"],
            [3, "Unit 8 – Writing Practice", "travel items", "Present perfect review", "Workbook writing", "Học viên có thể viết đoạn ngắn mô tả kinh nghiệm đi du lịch"],
            [4, "Fluency Time 1 – Project: A travel plan", "travel & holiday", "have/haven’t got", "Create holiday plan", "Học viên có thể trình bày kế hoạch du lịch và những thứ cần chuẩn bị"],
            [5, "Review 1 – Unit 8 summary", "travel & time", "review", "Workbook + quiz", "Học viên củng cố kỹ năng nói – viết về thời gian và du lịch"],
            [6, "Unit 9 – Something new to watch! (TV & entertainment)", "film, cartoon, sports, news", "Infinitive of purpose: to watch / to learn", "Workbook p.68", "Học viên có thể nói về các chương trình TV yêu thích và lý do xem"],
            [7, "Unit 9 – Reading & Listening", "comedy, drama, series", "I watch … every day.", "Listening comprehension", "Học viên có thể nghe hiểu và mô tả thói quen xem TV"],
            [8, "Unit 9 – Speaking Practice", "channels, actors", "What’s on TV today?", "Pair speaking", "Học viên có thể hỏi – trả lời về chương trình TV trong ngày"],
            [9, "Fluency Time 2 – Project: My own TV guide", "TV shows", "daily routine", "Create TV guide", "Học viên có thể viết và trình bày lịch chiếu chương trình yêu thích"],
            [10, "Review 2 – Units 8–9", "travel, TV", "review", "Workbook", "Học viên củng cố cách sử dụng “to + V” và thói quen giải trí"],
            [11, "Unit 10 – I’ve printed my homework! (Computers & school)", "computer, email, mouse, screen", "Present perfect: affirmative", "Workbook p.80", "Học viên có thể mô tả các hoạt động học tập đã hoàn thành"],
            [12, "Unit 10 – Reading & Writing", "homework, file, keyboard", "Have you finished …?", "Workbook writing", "Học viên có thể viết đoạn ngắn về việc học và bài tập đã hoàn thành"],
            [13, "Unit 11 – Have you ever been …? (Experiences)", "mountain, cave, sea, desert", "Present perfect: Have you ever …?", "Workbook p.86", "Học viên có thể nói về kinh nghiệm du lịch và khám phá"],
            [14, "Unit 11 – Listening & Speaking", "city, jungle, river", "Yes, I have. / No, I haven’t.", "Pair dialogue", "Học viên có thể hỏi – trả lời về trải nghiệm cá nhân"],
            [15, "Fluency Time 3 – Project: My travel diary", "travel destinations", "present perfect review", "Create diary", "Học viên có thể viết nhật ký du lịch ngắn bằng tiếng Anh"],
            [16, "Review 3 – Units 10–11", "computer, travel", "review", "Workbook", "Học viên củng cố ngữ pháp thì hiện tại hoàn thành"],
            [17, "Ôn tập kiểm tra giữa kỳ 2", "Tổng hợp Units 8–11", "", "Ôn luyện nghe – nói – viết", "Học viên củng cố toàn bộ kiến thức nửa đầu học kỳ 2"],
            [18, "Kiểm tra giữa học kỳ 2", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực nghe, nói, viết sau Units 8–11"],
            [19, "Unit 12 – What’s the matter? (Health & advice)", "cold, fever, headache, stomachache", "should / shouldn’t", "Workbook p.92", "Học viên có thể đưa ra và nhận lời khuyên về sức khỏe"],
            [20, "Unit 12 – Reading & Listening", "doctor, hospital, nurse", "You shouldn’t eat …", "Workbook listening", "Học viên có thể nghe hiểu và nói về tình huống sức khỏe"],
            [21, "Fluency Time 4 – Project: Health poster", "health & body", "should/shouldn’t", "Create poster", "Học viên có thể tạo poster hướng dẫn lối sống lành mạnh"],
            [22, "Review 4 – Unit 12 summary", "health words", "review", "Workbook", "Học viên củng cố mẫu câu khuyên nhủ và từ vựng về sức khỏe"],
            [23, "Unit 13 – Can you help me? (Requests & tools)", "scissors, glue, pencil, towel", "Object pronouns: me, him, her, them", "Workbook p.104", "Học viên có thể yêu cầu hoặc đề nghị giúp đỡ lịch sự"],
            [24, "Unit 13 – Reading & Writing", "materials, classroom", "Please give me …", "Workbook writing", "Học viên có thể viết đoạn mô tả cách giúp đỡ bạn bè trong lớp"],
            [25, "Unit 14 – We were fishing (Family & memories)", "fishing, river, picnic, forest", "Past continuous", "Workbook p.110", "Học viên có thể kể lại hoạt động đang diễn ra trong quá khứ"],
            [26, "Unit 14 – Reading & Speaking", "family, camping", "When I was …", "Pair conversation", "Học viên có thể kể về một kỷ niệm gia đình"],
            [27, "Fluency Time 5 – Project: Memory poem", "family, camping", "past continuous", "Write poem", "Học viên có thể sáng tác thơ ngắn về ký ức gia đình"],
            [28, "Review 5 – Units 13–14", "family, memories", "review", "Workbook", "Học viên củng cố kỹ năng kể chuyện bằng quá khứ tiếp diễn"],
            [29, "Unit 15 – Good news, bad news (Stories & endings)", "news, hero, story, writer", "Past simple & past continuous", "Workbook p.116", "Học viên có thể kể lại câu chuyện đã đọc hoặc nghe"],
            [30, "Unit 15 – Reading & Listening", "ending, story, dream", "sequence words", "Workbook listening", "Học viên có thể hiểu và viết kết thúc câu chuyện đơn giản"],
            [31, "Fluency Time 6 – Project: Story card", "storytelling words", "past tenses", "Create story card", "Học viên có thể viết và kể lại một câu chuyện ngắn bằng tiếng Anh"],
            [32, "Review 6 – Unit 15 summary", "story words", "review", "Workbook", "Học viên củng cố kỹ năng kể lại sự kiện trong quá khứ"],
            [33, "Review 7 – Units 8–15", "all vocab review", "mixed grammar", "Workbook + oral test", "Học viên tổng hợp toàn bộ kiến thức học kỳ 2"],
            [34, "Ôn tập kiểm tra cuối kỳ 2", "Tổng hợp Units 8–15", "", "Ôn luyện toàn phần", "Học viên củng cố kỹ năng nghe, nói, viết học kỳ 2"],
            [35, "Kiểm tra cuối học kỳ 2", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực tổng thể cuối năm học tiếp tục"]
        ];
        
        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY Primary School - Grade 5 First semester ==========

        $subject = Subject::where('name', 'ICY Primary School - Grade 5 First semester')->first();

        $lessons = [
            [1, "Unit 1 – You can build it! (Tools & inventions)", "hammer, nails, screwdriver, drill", "Present perfect: have/has ever/never", "Workbook p.8", "Học viên có thể nói về trải nghiệm và công cụ đã từng sử dụng bằng thì hiện tại hoàn thành"],
            [2, "Unit 1 – Reading & Listening", "tool, material, project", "Present perfect + since/for", "Reading comprehension", "Học viên có thể hiểu và viết về dự án thủ công cá nhân"],
            [3, "Unit 1 – Speaking & Writing", "build, design, make", "ever/never questions", "Workbook writing", "Học viên có thể đặt câu hỏi và viết đoạn mô tả về phát minh tự làm"],
            [4, "Fluency Time 1 – Project: Event poster", "tools, objects", "have/has review", "Create project poster", "Học viên có thể mô tả hoạt động chế tạo bằng tiếng Anh"],
            [5, "Review 1 – Unit 1 summary", "tools & inventions", "review", "Workbook + quiz", "Học viên củng cố cấu trúc thì hiện tại hoàn thành và vốn từ về công cụ"],
            [6, "Unit 2 – It’s show time! (Performing arts)", "actor, actress, stage, play", "Past simple vs Present perfect", "Workbook p.16", "Học viên có thể nói về vở kịch hoặc sự kiện từng tham gia"],
            [7, "Unit 2 – Reading & Listening", "musical, concert, costume", "I’ve just / I haven’t yet", "Listening comprehension", "Học viên có thể nghe hiểu và mô tả hoạt động nghệ thuật"],
            [8, "Unit 2 – Writing Practice", "stage, curtain, performance", "using time markers (just, already, yet)", "Workbook writing", "Học viên có thể viết đoạn ngắn về chương trình biểu diễn"],
            [9, "Fluency Time 2 – Project: Drama script", "performance words", "past vs present perfect", "Create play script", "Học viên có thể viết và trình bày một kịch bản ngắn"],
            [10, "Review 2 – Units 1–2", "inventions, performance", "review", "Workbook", "Học viên củng cố kỹ năng nói – viết về sự kiện đã qua"],
            [11, "Unit 3 – The best party ever! (Festivals & celebrations)", "carnival, costume, mask, float", "Comparatives & superlatives", "Workbook p.24", "Học viên có thể so sánh lễ hội và mô tả sự kiện yêu thích"],
            [12, "Unit 3 – Reading & Speaking", "parade, fair, fireworks", "too / enough", "Speaking practice", "Học viên có thể nói và so sánh mức độ đồ vật hoặc cảm xúc"],
            [13, "Unit 3 – Writing Practice", "festival, band", "as … as / not as … as", "Workbook writing", "Học viên có thể viết đoạn mô tả và so sánh lễ hội bằng tính từ"],
            [14, "Fluency Time 3 – Project: Booking tickets", "celebration words", "comparative review", "Create festival leaflet", "Học viên có thể lập kế hoạch tham dự sự kiện bằng tiếng Anh"],
            [15, "Review 3 – Unit 3 summary", "festival & party", "review", "Workbook + oral test", "Học viên củng cố cấu trúc so sánh và mô tả lễ hội"],
            [16, "Ôn tập kiểm tra giữa kỳ 1", "Tổng hợp Units 1–3", "", "Ôn luyện nghe – nói – viết", "Học viên củng cố toàn bộ kiến thức giữa kỳ"],
            [17, "Kiểm tra giữa học kỳ 1", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực nghe, nói, viết"],
            [18, "Unit 4 – Our planet (Environment)", "recycle, rubbish, forest, pollution", "Past simple & past continuous", "Workbook p.38", "Học viên có thể mô tả hành động và sự kiện trong quá khứ liên quan môi trường"],
            [19, "Unit 4 – Reading & Listening", "Earth, clean, protect", "There used to be …", "Workbook listening", "Học viên có thể hiểu và nói về sự thay đổi môi trường"],
            [20, "Unit 4 – Writing Practice", "save, environment", "past continuous review", "Workbook writing", "Học viên có thể viết đoạn nêu biện pháp bảo vệ môi trường"],
            [21, "Unit 5 – Reuse and recycle (Sustainability)", "plastic, paper, glass, energy", "will / won’t", "Workbook p.46", "Học viên có thể nói về kế hoạch tái chế trong tương lai"],
            [22, "Unit 5 – Reading & Speaking", "rubbish, project, idea", "future meaning with will", "Workbook speaking", "Học viên có thể thảo luận ý tưởng tái chế sáng tạo"],
            [23, "Fluency Time 4 – Project: Recycle campaign", "environment words", "will/won’t", "Create poster", "Học viên có thể tạo poster tuyên truyền bảo vệ môi trường"],
            [24, "Review 4 – Units 4–5", "environment & future", "review", "Workbook", "Học viên củng cố thì tương lai và từ vựng môi trường"],
            [25, "Unit 6 – Crazy about wildlife! (Animals & nature)", "jungle, elephant, gorilla, safari", "be going to (future plans)", "Workbook p.54", "Học viên có thể nói về kế hoạch tham quan công viên động vật"],
            [26, "Unit 6 – Reading & Listening", "wild, nature, protect", "going to + verb", "Workbook writing", "Học viên có thể nghe hiểu và viết kế hoạch bảo tồn động vật"],
            [27, "Unit 6 – Speaking Practice", "animal words", "future plans", "Pair speaking", "Học viên có thể nói về kế hoạch học tập và bảo vệ động vật hoang dã"],
            [28, "Fluency Time 5 – Project: Wildlife park map", "zoo, ranger", "be going to review", "Create map & presentation", "Học viên có thể vẽ bản đồ khu bảo tồn và thuyết trình bằng tiếng Anh"],
            [29, "Review 5 – Unit 6 summary", "animals & plans", "review", "Workbook + oral test", "Học viên củng cố cách nói về kế hoạch và động vật"],
            [30, "Ôn tập kiểm tra cuối kỳ 1", "Tổng hợp Units 1–6", "", "Ôn luyện toàn phần", "Học viên củng cố toàn bộ kỹ năng nghe, nói, viết"],
            [31, "Kiểm tra cuối học kỳ 1", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực tổng thể học kỳ 1"],
            [32, "Bổ trợ kỹ năng: Listening review", "common topics", "review tenses", "Workbook practice", "Học viên tăng cường kỹ năng nghe hiểu qua chủ đề tổng hợp"],
            [33, "Bổ trợ kỹ năng: Speaking review", "everyday language", "question patterns", "Pair speaking", "Học viên tự tin giao tiếp qua tình huống thực tế"],
            [34, "Ôn tập tổng hợp học kỳ 1", "Tổng hợp Units 1–6", "", "Workbook + oral test", "Học viên củng cố toàn diện kiến thức ngôn ngữ và kỹ năng"],
            [35, "Đánh giá cuối kỳ 1", "Kiểm tra tổng kết", "", "", "Học viên hoàn thành chương trình và đạt chuẩn đầu ra học kỳ 1"]
        ];
        
        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }

        // ========== ICY Primary School - Grade 5 Second semester ==========

        $subject = Subject::where('name', 'ICY Primary School - Grade 5 Second semester')->first();

        $lessons = [
            [1, "Unit 7 – Call an ambulance! (Emergency & services)", "ambulance, bandage, firefighter, nurse", "Reported speech with said/told", "Workbook p.68", "Học viên có thể tường thuật lại lời nói trong tình huống khẩn cấp bằng cấu trúc said/told"],
            [2, "Unit 7 – Reading & Listening", "accident, emergency, rescue", "Reported time markers: the next day, yesterday", "Workbook listening", "Học viên có thể nghe hiểu và kể lại sự việc tai nạn bằng lời gián tiếp"],
            [3, "Unit 7 – Speaking & Writing", "help, service, report", "Reported verbs practice", "Workbook writing", "Học viên có thể viết đoạn tường thuật ngắn về sự cố và phản ứng của người tham gia"],
            [4, "Fluency Time 1 – Project: Emergency role-play", "health & safety", "Reported speech review", "Create role-play dialogue", "Học viên có thể nhập vai và phản ứng trong tình huống khẩn cấp"],
            [5, "Review 1 – Unit 7 summary", "emergency & jobs", "review", "Workbook + oral test", "Học viên củng cố cách tường thuật và từ vựng về dịch vụ cứu hộ"],
            [6, "Unit 8 – Let’s eat healthily (Food & nutrition)", "fruit, vegetables, protein, sugar", "First conditional: If + present, will + verb", "Workbook p.76", "Học viên có thể nói về thói quen ăn uống và kết quả có thể xảy ra"],
            [7, "Unit 8 – Reading & Listening", "healthy, diet, energy", "Conditional questions", "Listening comprehension", "Học viên có thể nghe hiểu và thảo luận về dinh dưỡng hợp lý"],
            [8, "Unit 8 – Writing Practice", "meal, drink, menu", "will + result", "Workbook writing", "Học viên có thể viết kế hoạch ăn uống lành mạnh bằng câu điều kiện loại 1"],
            [9, "Fluency Time 2 – Project: My healthy menu", "health words", "conditionals review", "Create food chart", "Học viên có thể thiết kế thực đơn lành mạnh và trình bày lý do chọn"],
            [10, "Review 2 – Units 7–8", "food, health", "review", "Workbook", "Học viên củng cố mẫu câu điều kiện và vốn từ về sức khỏe"],
            [11, "Unit 9 – The big match (Sports & competitions)", "match, coach, goal, champion", "Modal verbs: may, might, could", "Workbook p.84", "Học viên có thể dự đoán và nói về khả năng trong thi đấu thể thao"],
            [12, "Unit 9 – Reading & Listening", "player, referee, stadium", "might have to / could", "Workbook listening", "Học viên có thể hiểu và viết đoạn về trận đấu thể thao yêu thích"],
            [13, "Unit 9 – Speaking Practice", "sports & rules", "modal verbs review", "Pair speaking", "Học viên có thể nói về dự đoán và kế hoạch thi đấu thể thao"],
            [14, "Fluency Time 3 – Project: Message board", "sports & media", "modals review", "Write message", "Học viên có thể viết tin nhắn ngắn trao đổi kế hoạch thi đấu"],
            [15, "Review 3 – Unit 9 summary", "sports & modals", "review", "Workbook", "Học viên củng cố khả năng sử dụng động từ khuyết thiếu trong dự đoán"],
            [16, "Ôn tập kiểm tra giữa kỳ 2", "Tổng hợp Units 7–9", "", "Ôn luyện nghe – nói – viết", "Học viên củng cố kiến thức giữa kỳ"],
            [17, "Kiểm tra giữa học kỳ 2", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực nghe, nói, viết"],
            [18, "Unit 10 – Ancient buildings (History & culture)", "temple, statue, wall, ruin", "Indefinite pronouns: someone, anything, nothing", "Workbook p.98", "Học viên có thể mô tả và viết về di tích lịch sử nổi tiếng"],
            [19, "Unit 10 – Reading & Speaking", "archaeologist, artifact, museum", "There is something / There isn’t anything", "Workbook writing", "Học viên có thể kể lại trải nghiệm tham quan bảo tàng"],
            [20, "Unit 10 – Writing Practice", "ancient, history, stone", "wh- questions review", "Workbook", "Học viên có thể viết đoạn mô tả về công trình cổ đại"],
            [21, "Unit 11 – A message for the future (Technology & communication)", "message, email, robot, device", "Future perfect & passive voice", "Workbook p.106", "Học viên có thể mô tả công nghệ và truyền thông trong tương lai"],
            [22, "Unit 11 – Reading & Listening", "film, review, screen, camera", "Passive forms: is/was made", "Listening comprehension", "Học viên có thể nhận biết cấu trúc bị động trong bài đọc về phim"],
            [23, "Fluency Time 4 – Project: Future message", "tech words", "passive & future", "Create message card", "Học viên có thể viết thông điệp gửi cho thế hệ tương lai bằng tiếng Anh"],
            [24, "Review 4 – Unit 11 summary", "communication & tech", "review", "Workbook", "Học viên củng cố kỹ năng sử dụng câu bị động và thì tương lai"],
            [25, "Unit 12 – Be part of history! (Achievements & society)", "invention, discovery, scientist, award", "The passive past simple", "Workbook p.114", "Học viên có thể kể lại phát minh và nhà khoa học nổi tiếng"],
            [26, "Unit 12 – Reading & Writing", "experiment, success, design", "Who was … invented by?", "Workbook writing", "Học viên có thể viết đoạn kể lại phát minh bằng cấu trúc bị động"],
            [27, "Fluency Time 5 – Project: Great inventors", "inventions & people", "passive voice review", "Create poster", "Học viên có thể trình bày poster về nhà phát minh yêu thích"],
            [28, "Review 5 – Unit 12 summary", "inventions & history", "review", "Workbook", "Học viên củng cố từ vựng và cấu trúc bị động trong văn viết"],
            [29, "Review 6 – Units 7–12", "emergency, health, history", "mixed grammar", "Workbook + quiz", "Học viên củng cố toàn bộ nội dung học kỳ 2"],
            [30, "Ôn tập kiểm tra cuối kỳ 2", "Tổng hợp Units 7–12", "", "Ôn luyện toàn phần", "Học viên củng cố kỹ năng nghe, nói, viết học kỳ 2"],
            [31, "Kiểm tra cuối học kỳ 2", "Kiểm tra đánh giá", "", "", "Học viên thể hiện năng lực tổng thể cuối năm học"],
            [32, "Bổ trợ kỹ năng: Listening & Speaking", "key themes review", "all tenses", "Pair & group work", "Học viên có thể vận dụng linh hoạt các thì trong giao tiếp"],
            [33, "Bổ trợ kỹ năng: Reading comprehension", "world topics", "vocabulary review", "Workbook exercises", "Học viên nâng cao kỹ năng đọc hiểu theo chủ đề"],
            [34, "Ôn tập tổng hợp cuối năm", "Units 1–12 summary", "", "Review activities", "Học viên củng cố toàn diện kiến thức cả năm học"],
            [35, "Kiểm tra cuối học kỳ 2", "Kiểm tra đánh giá", "", "", "Học viên hoàn thành chương trình và đạt chuẩn đầu ra lớp 5 tiếp tục"]
        ];
        
        foreach ($lessons as $lesson) {
            $subject->syllabi()->create([
                'lesson_number' => $lesson[0],
                'content'       => $lesson[1],
                'vocabulary'    => $lesson[2],
                'grammar'       => $lesson[3],
                'assignment'    => $lesson[4],
                'CLO'           => $lesson[5],
            ]);
        }
    }
}
