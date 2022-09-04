gsap.registerPlugin(ScrollTrigger);

let buttonAnim = () => {
    const tlMessageBtn = gsap.timeline({defaults:{duration:.1},repeat: -1, repeatDelay: 2});
    tlMessageBtn.to('.button-zam',{rotate: 5})
        .to('.button-zam',{rotate: -5})
        .to('.button-zam',{rotate: 5})
        .to('.button-zam',{rotate: 0});
    return tlMessageBtn;
}

const tl  = gsap.timeline({defaults:{duration:1}});

tl.from(".caption-gsap", {
    y: 30,
    opacity: 0,
    duration: 1,

})
    .from(".after-caption-gsap", {
    opacity: 0,
    duration: 1,

})
    .from('.button-zam',{opacity: 0})
    .add(buttonAnim);


gsap.from(
    '.kategory-gsap-capt',
    {
        scrollTrigger:'.kategory-gsap-capt',
        delay:.5,
        x:-100,
        opacity:0,
        duration: .5,
    }
)
gsap.from(
    '.kategory-gsap-button-all',
    {
        scrollTrigger:'.kategory-gsap-capt',
        delay:.5,
        x:100,
        opacity:0,
        duration: .5,
    }
)

gsap.from(
    '.card-kategory-gsap1',
    {
        scrollTrigger:'.card-kategory-gsap1',
        y:30,
        opacity:0,
        duration: .5,
    }
)
gsap.from(
    '.card-kategory-gsap2',
    {
        scrollTrigger:'.card-kategory-gsap2',
        y:30,
        opacity:0,
        duration: .5,
    }
)

gsap.from(
    '.card-kategory-gsap3',
    {
        scrollTrigger:'.card-kategory-gsap3',
        y:30,
        opacity:0,
        duration: .5,
    }
)
gsap.from(
    '.card-kategory-gsap4',
    {
        scrollTrigger:'.card-kategory-gsap4',
        y:30,
        opacity:0,
        duration: .5,
    }
)
gsap.from(
    '.card-kategory-gsap5',
    {
        scrollTrigger:'.card-kategory-gsap5',
        y:30,
        opacity:0,
        duration: .5,
    }
)
gsap.from(
    '.card-kategory-gsap6',
    {
        scrollTrigger:'.card-kategory-gsap6',
        y:30,
        opacity:0,
        duration: .5,
    }
)

gsap.from(
    '.card-kategory-gsap7',
    {
        scrollTrigger:'.card-kategory-gsap7',
        y:30,
        opacity:0,
        duration: .5,
    }
)
gsap.from(
    '.card-kategory-gsap8',
    {
        scrollTrigger:'.card-kategory-gsap8',
        y:30,
        opacity:0,
        duration: .5,
    }
)

gsap.from(
    '.capt-gsap',
    {
        scrollTrigger:'.capt-gsap',
        delay:.5,
        x:-30,
        opacity:0,
        duration: .5,
    }
)
gsap.from(
    '.capt-gsap-but',
    {
        scrollTrigger:'.capt-gsap',
        delay:.5,
        x:30,
        opacity:0,
        duration: .5,
    }
)

gsap.from(
    '.autoplay',
    {
        scrollTrigger:'.autoplay',
        delay:.5,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.ico1-rec',
    {
        scrollTrigger:'.ico1-rec',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)
gsap.from(
    '.ico2-rec',
    {
        scrollTrigger:'.ico2-rec',
        delay:0.6,
        y:30,
        opacity:0,
        duration: 1,
    }
)
gsap.from(
    '.ico3-rec',
    {
        scrollTrigger:'.ico3-rec',
        delay:0.9,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.ico4-rec',
    {
        scrollTrigger:'.ico4-rec',
        delay:1.2,
        y:30,
        opacity:0,
        duration: 1,
    }
)
gsap.from(
    '.discont-one',
    {
        scrollTrigger:'.discont-one',
        delay:0.5,
        x:-30,
        opacity:0,
        duration: 1,
    }
)
gsap.from(
    '.discont-two',
    {
        scrollTrigger:'.discont-two',
        delay:0.5,
        x:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card5',
    {
        scrollTrigger:'.card5',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card1',
    {
        scrollTrigger:'.card1',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card4',
    {
        scrollTrigger:'.card4',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)
gsap.from(
    '.card3',
    {
        scrollTrigger:'.card3',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)
gsap.from(
    '.card2',
    {
        scrollTrigger:'.card2',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card12',
    {
        scrollTrigger:'.card12',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)


gsap.from(
    '.card6',
    {
        scrollTrigger:'.card6',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card7',
    {
        scrollTrigger:'.card7',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card8',
    {
        scrollTrigger:'.card8',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card9',
    {
        scrollTrigger:'.card9',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card10',
    {
        scrollTrigger:'.card10',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card11',
    {
        scrollTrigger:'.card11',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)


gsap.from(
    '.card13',
    {
        scrollTrigger:'.card13',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)
gsap.from(
    '.card14',
    {
        scrollTrigger:'.card14',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)
gsap.from(
    '.card15',
    {
        scrollTrigger:'.card15',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card16',
    {
        scrollTrigger:'.card16',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)


gsap.from(
    '.card17',
    {
        scrollTrigger:'.card17',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card18',
    {
        scrollTrigger:'.card18',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.card19',
    {
        scrollTrigger:'.card20',
        delay:.3,
        y:30,
        opacity:0,
        duration: 1,
    }
)

gsap.from(
    '.gallery',
    {
        scrollTrigger:'.gallery',
        delay:.3,
        x:-30,
        opacity:0,
        duration: 1,
    }
)
gsap.from(
    '.desc-product',
    {
        scrollTrigger:'.desc-product',
        delay:.3,
        x:30,
        opacity:0,
        duration: 1,
    }
)
