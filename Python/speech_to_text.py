#download 'SpeechRecognition'  dependency by 'sudo pip3 install SpeechRecognition'

#then import it in the code
import speech_recognition as sr

#start recognizer
r = sr.Recognizer()

#get voice from microphone
with sr.Microphone() as source:
    print("Speak Anything :")
    audio = r.listen(source)
    try:
        text = r.recognize_google(audio)
        print("You said : {}".format(text))
    except:
        print("Sorry could not recognize what you said")

#use google recognizer to convert voice into text, but if the recording is not clear show 'sorry' to the user.
