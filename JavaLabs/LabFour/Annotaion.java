package annotation;

import java.lang.annotation.*;
import java.lang.reflect.*;

@Retention(RetentionPolicy.RUNTIME)
@Target({ElementType.TYPE, ElementType.METHOD, ElementType.CONSTRUCTOR, ElementType.FIELD})
@interface Author {
    String value() default "";
}

@Author("John Doe")
public class Annot{

    @Author("Jane Smith")
    private String annotatedField;

    @Author("Alice Wonderland")
    public Annot() {       
    }
    @Author("Bob Builder")
    public void annotatedMethod() {
    }

    public static void main(String[] args) {
        extractAnnotationInformation(Annot.class);
    }

    private static void extractAnnotationInformation(Class<?> clazz) {
        Author classAnnotation = clazz.getAnnotation(Author.class);
        if (classAnnotation != null) {
            System.out.println("Class Author: " + classAnnotation.value());
        }

        Constructor<?>[] constructors = clazz.getDeclaredConstructors();
        for (Constructor<?> constructor : constructors) {
            Author constructorAnnotation = constructor.getAnnotation(Author.class);
            if (constructorAnnotation != null) {
                System.out.println("Constructor Author: " + constructorAnnotation.value());
            }
        }

        Method[] methods = clazz.getDeclaredMethods();
        for (Method method : methods) {
            Author methodAnnotation = method.getAnnotation(Author.class);
            if (methodAnnotation != null) {
                System.out.println("Method " + method.getName() + " Author: " + methodAnnotation.value());
            }
        }

        Field[] fields = clazz.getDeclaredFields();
        for (Field field : fields) {
            Author fieldAnnotation = field.getAnnotation(Author.class);
            if (fieldAnnotation != null) {
                System.out.println("Field " + field.getName() + " Author: " + fieldAnnotation.value());
            }
        }
    }
}
