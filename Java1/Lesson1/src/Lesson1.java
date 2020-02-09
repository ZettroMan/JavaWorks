public class Lesson1 {
    public static void main(String[] args) {
        //Объявляем переменные всех пройденных на уроке типов
        byte byte_var1 = 0x2f; // = 47
        byte byte_var2 = 95;
        short short_var = 1523;
        int int_var = 46575;
        long long_var = 35467892345L;
        float float_var = 45.98f;
        double double_var1 = 567.78E21; // = 5.6778E23
        double double_var2 = 0x4F14p12; // = 20244 * 2^12 == 20244 * 4096 == 82919424 == 8.2919424 * 10^7 == 8.2919424E7
        char char_var1 = 'x';
        char char_var2 = '\u0057'; // = 'W'
        boolean bool_var = false;
        String my_string = "Некоторый текст";
        //Для проверки выводим в консоль
        System.out.println("byte_var1 = " + byte_var1);
        System.out.println("byte_var2 = " + byte_var2);
        System.out.println("short_var = " + short_var);
        System.out.println("int_var = " + int_var);
        System.out.println("long_var = " + long_var);
        System.out.println("float_var = " + float_var);
        System.out.println("double_var1 = " + double_var1);
        System.out.println("double_var2 = " + double_var2);
        System.out.println("char_var1 = " + char_var1);
        System.out.println("char_var2 = " + char_var2);
        System.out.println("bool_var = " + bool_var);
        System.out.println("my_string = " + my_string);
    }
}
