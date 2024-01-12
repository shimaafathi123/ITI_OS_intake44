package wordDictionary;

import java.util.*;
import java.util.regex.*;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class wordDictionary {

	public static void main(String[] args) {
		String[] aWords = {"Apple", "Adventure", "Atmosphere", "Acoustic", "Alligator", "Amethyst", "Avocado", "Astonish", "Astronomy", "Abundant"};
		String[] bWords = {"Banana", "Brave", "Breeze", "Bubble", "Blossom", "Balloon", "Beacon", "Ballet", "Bonsai", "Blissful"};
		String[] cWords = {"Cactus", "Cascade", "Crisp", "Calm", "Charm", "Celestial", "Cello", "Cerulean", "Cherish", "Cinnamon"};
		String[] dWords = {"Dazzle", "Delight", "Dolphin", "Dream", "Dewdrop", "Diamond", "Dusk", "Divine", "Dainty", "Dragonfly"};
		String[] eWords = {"Eagle", "Eclipse", "Elegant", "Enchant", "Emerald", "Endless", "Essence", "Evergreen", "Exquisite", "Ephemeral"};
		String[] fWords = {"Fairy", "Flame", "Fiesta", "Frost", "Floral", "Firefly", "Fascinate", "Fable", "Feather", "Flicker"};
		String[] gWords = {"Gazebo", "Glimmer", "Grace", "Gentle", "Galaxy", "Glisten", "Garnet", "Gentleman", "Giggly", "Glitter"};
		String[] hWords = {"Harmony", "Heavenly", "Honey", "Harbor", "Hope", "Heartfelt", "Halcyon", "Haven", "Halo", "Hyacinth"};
		String[] iWords = {"Imagine", "Infinite", "Inspire", "Ivory", "Island", "Illuminate", "Impulse", "Incandescent", "Ingenious", "Ineffable"};
		String[] jWords = {"Jubilant", "Jade", "Journey", "Joyful", "Jazz", "Jasmine", "Jovial", "Jigsaw", "Jubilee", "Jocular"};
		String[] kWords = {"Kaleidoscope", "Kindle", "Kinetic", "Keen", "Kismet", "Kale", "Kudos", "Kiss", "Kittens", "Knight"};
		String[] lWords = {"Lagoon", "Luminous", "Lullaby", "Lavender", "Lively", "Lunar", "Luscious", "Lyric", "Labyrinth", "Lilac"};
		String[] mWords = {"Majestic", "Mystic", "Moonlight", "Melody", "Mirth", "Magenta", "Mosaic", "Mellow", "Miracle", "Majesty"};
		String[] nWords = {"Nebula", "Nectar", "Nirvana", "Noble", "Nurturing", "Nautical", "Novel", "Nuance", "Nebulous", "Nestle"};
		String[] oWords = {"Orchid", "Opulent", "Oasis", "Oceanic", "Optimistic", "Ornate", "Outstanding", "Overcome", "Overjoyed", "Onyx"};
		String[] pWords = {"Peach", "Pristine", "Petal", "Panorama", "Pleasure", "Ponder", "Panache", "Peaceful", "Perfume", "Pinnacle"};
		String[] qWords = {"Quasar", "Quaint", "Quell", "Quest", "Quiver", "Quintessence", "Quirky", "Quiet", "Quintessential", "Quench"};
		String[] rWords = {"Radiant", "Reverie", "Ripple", "Rustic", "Rendezvous", "Rhapsody", "Resplendent", "Rejoice", "Rose", "Rapture"};
		String[] sWords = {"Serene", "Sapphire", "Serenade", "Symphony", "Sparkle", "Stellar", "Sublime", "Savor", "Sculpt", "Sylvan"};
		String[] tWords = {"Tranquil", "Twilight", "Tender", "Tropical", "Talisman", "Tidal", "Traverse", "Timeless", "Tintinnabulation", "Treasure"};
		String[] uWords = {"Umbra", "Utopia", "Unwind", "Uplift", "Utter", "Umbrella", "Unique", "Upbeat", "Universe", "Unity"};
		String[] vWords = {"Velvet", "Vivid", "Vibrant", "Vanilla", "Valiant", "Vortex", "Verdant", "Verve", "Voyage", "Virtue"};
		String[] wWords = {"Whisper", "Wander", "Wisp", "Willow", "Wavelength", "Wondrous", "Wishful", "Waltz", "Wonder", "Wildflower"};
		String[] xWords = {"Xanadu", "Xylophone", "Xenon", "Xeric", "X-factor", "Xenial", "Xenophobe", "Xanthein", "Xenagogue", "Xerox"};
		String[] yWords = {"Yearning", "Yonder", "Yoga", "Yummy", "Yield", "Yarn", "Yonder", "Yaffle", "Yoga", "Yonder"};
		String[] zWords = {"Zephyr", "Zenith", "Zeal", "Zest", "Zing", "Zircon", "Zestful", "Zen", "Zeppelin", "Zany"};
	String [][] allWords= { aWords, bWords,cWords,dWords, eWords,fWords,gWords, hWords,iWords,jWords, kWords,lWords,mWords, nWords,oWords,pWords, qWords,rWords,sWords,tWords,uWords,vWords, wWords,xWords, yWords, zWords};
	
	   List<Set<String>> setList = convertToSetList(allWords);

       Scanner scanner = new Scanner(System.in);

       Map<Character, Set<String>> resultMap = convertToMap(setList);
       int choice;
       do {
           displayMenu();
           System.out.print("Enter your choice: ");
           choice = scanner.nextInt();
           scanner.nextLine();
           switch (choice) {
               case 1:
            	   printMap(resultMap);
            	   break;
               case 2:
			       System.out.print("Enter a word: ");
			       String inputWord = scanner.nextLine().trim();
			
			       insertWordIntoMap(inputWord, resultMap);
			       printMap(resultMap);
			       break;
               case 3:
			       System.out.print("Enter a word to remove: ");
			       String wordToRemove = scanner.nextLine().trim();
			
			       removeWordFromMap(wordToRemove, resultMap);
			       printMap(resultMap);
			       break;
               case 4:
			       System.out.print("Enter a key (alphabet letter): ");
			       char keyToRetrieve = scanner.next().charAt(0);
			
			       Set<String> specificSet = resultMap.get(keyToRetrieve);
			
			       if (specificSet != null) {
			           System.out.println("Set for key '" + keyToRetrieve + "': " + specificSet);
			       } else {
			           System.out.println("No set found for the entered key.");
			       }
			       break;
               case 5:
			       System.out.print("Enter a key to remove all words: ");
			       char keyToRemove = scanner.next().charAt(0);
			
			       removeAllKeyFromMap(keyToRemove, resultMap);
			       printMap(resultMap);
			       break;
               case 6:
			       System.out.print("Enter a substring to search for words: ");
			       scanner.nextLine(); 
			       String substring = scanner.nextLine().trim();
			
			       searchAndPrint(resultMap, substring);
			       break;             
			       case 0:
	                    System.out.println("Exiting the program. Goodbye!");
	                    break;
	                default:
	                    System.out.println("Invalid choice. Please try again.");
           }  }while (choice != 0);
   }

   private static List<Set<String>> convertToSetList(String[][] twoDArray) {
       List<Set<String>> setList = new ArrayList<>();

       for (String[] row : twoDArray) {
           Set<String> rowSet = new TreeSet<>(Arrays.asList(row));
           setList.add(rowSet);
       }

       return setList;
   }

   private static Map<Character, Set<String>> convertToMap(List<Set<String>> sortedSetList) {
       Map<Character, Set<String>> resultMap = new HashMap<>();

       for (Set<String> rowSet : sortedSetList) {
           for (String word : rowSet) {
               char key = word.charAt(0);
               resultMap.putIfAbsent(key, new TreeSet<>());
               resultMap.get(key).add(word);
           }
       }

       return resultMap;
   }

   private static void insertWordIntoMap(String word, Map<Character, Set<String>> resultMap) {
       if (word.length() > 0) {
           char key = word.charAt(0);
           resultMap.putIfAbsent(key, new TreeSet<>());
           resultMap.get(key).add(word);
       }
   }

   private static void removeWordFromMap(String word, Map<Character, Set<String>> resultMap) {
       if (word.length() > 0) {
           char key = word.charAt(0);
           Set<String> wordSet = resultMap.get(key);
           if (wordSet != null) {
               wordSet.remove(word);
               if (wordSet.isEmpty()) {
                   resultMap.remove(key);
               }
           }
       }
   }

   private static void printMap(Map<Character, Set<String>> resultMap) {
       for (Map.Entry<Character, Set<String>> entry : resultMap.entrySet()) {
           System.out.println(entry.getKey() + ": " + entry.getValue());
       }
   }

   private static void removeAllKeyFromMap(char key, Map<Character, Set<String>> resultMap) {
       resultMap.remove(key);
   }

   private static void searchAndPrint(Map<Character, Set<String>> resultMap, String substring) {
       String targetSubstring = substring.toLowerCase();

       boolean foundMatch = false;

       for (Set<String> wordSet : resultMap.values()) {
           for (String word : wordSet) {
               if (word.toLowerCase().contains(targetSubstring)) {
                   System.out.println("Found match: " + word);
                   foundMatch = true;
               }
           }
       }

       if (!foundMatch) {
           System.out.println("No matches found for the given substring.");
       }
   }
   private static void displayMenu() {
       System.out.println("\n===== Word Dictionary Menu =====");
       System.out.println("1. Print Word Dictionary");
       System.out.println("2. Insert a Word");
       System.out.println("3. Remove a Word");
       System.out.println("4. Search for Words");
       System.out.println("5. Remove All Words for a Key");
       System.out.println("6. Search Pattern");
       System.out.println("0. Exit");
   }
}
